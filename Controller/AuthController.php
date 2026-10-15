<?php
function login()
{
    global $con;
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
        
    }
    
    if (isset($_POST['login_btn'])) {
        $login_input = $_POST['login_input'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE username = '$login_input' OR email = '$login_input'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                $user_id = $row['user_id']; 
                $random_token = bin2hex(random_bytes(16)); 
                $expire_at = date('Y-m-d H:i:s', strtotime('+1 day')); 
                $token_query = "INSERT INTO user_tokens (user_id, token, expire_at)
                VALUES ('$user_id', '$random_token', '$expire_at')
                ON DUPLICATE KEY UPDATE
                token = VALUES(token),
                expire_at = VALUES(expire_at)";

                mysqli_query($con, $token_query);
                $concatenated_token = $user_id . '.' . $random_token . '.' . $expire_at;
                $_SESSION['auth_token'] = $concatenated_token;
               
                $_SESSION['user_logged_in'] = true;
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['full_name'] = $row['full_name'];

                header("Location: /sms/");
                exit();
            } else {
                echo "<script>alert('Invalid password credential!'); window.history.back();</script>";
                exit();
            }
        } else {
            echo "<script>alert('No account discovered with these entries!'); window.history.back();</script>";
            exit();
        }
    }
}

function register()
{
    global $con;
    if (isset($_POST['register_btn'])) {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $checkUser = "SELECT user_id FROM user WHERE username = '$username' OR email = '$email'";
        $runCheck = mysqli_query($con, $checkUser);

        if (mysqli_num_rows($runCheck) > 0) {
            echo "<script>alert('Username or Email already exists!'); window.history.back();</script>";
            exit();
        }
        $query = "INSERT INTO user (full_name, email, username, password) VALUES ('$full_name', '$email', '$username', '$hashed_password')";
        if (mysqli_query($con, $query)) {
            echo "<script>alert('Account created successfully! Please login.'); window.location.href='/sms/login';</script>";
            exit();
        } else {
            die("Error: " . mysqli_error($con));
        }
    }

}
function logout()
{
    global $con;
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }
    if (isset($_SESSION['user_id'])) {
        $session_user_id = $_SESSION['user_id']; 
        $logout_time = date('Y-m-d H:i:s');
        $update_query = "UPDATE user_tokens SET token = NULL, expire_at = '$logout_time' WHERE user_id = '$session_user_id'";
        mysqli_query($con, $update_query);
    }
    $_SESSION = array();
    session_destroy();
    header("Location: /sms/login");
    exit();
}