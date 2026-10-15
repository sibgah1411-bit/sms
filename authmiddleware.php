<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
function middleware($request){
    global $con;
    if(str_contains($request, 'login') || str_contains($request, 'register')){
        return;
    }
    if (!isset($_SESSION['auth_token']) || empty($_SESSION['auth_token'])) {
        header('Location: /sms/login');
        exit();
    }
    $token_parts = explode('.', $_SESSION['auth_token']);

    if(count($token_parts) != 3){
        session_destroy();
        header('Location: /sms/login');
        exit();
    }

    $session_user_id = $token_parts[0];
    $session_token = $token_parts[1];

    $query = "SELECT * FROM user_tokens
              WHERE user_id='$session_user_id'
              AND token='$session_token'
              AND expire_at > NOW()
              LIMIT 1";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) != 1){
        $_SESSION = [];
        session_destroy();
        header('Location: /sms/login');
        exit();
    }
}
