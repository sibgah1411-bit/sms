<?php
require $controllerPath . 'AuthController.php';

if (str_contains($request, 'register')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        register();
    }
    include $viewPath . 'auth/register.php';
    exit();
} 

elseif (str_contains($request, 'login')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        login();
    }
    include $viewPath . 'auth/login.php';
    exit();
}
elseif (str_contains($request, 'logout')) {
    logout();
    exit();
}
elseif ($request === '/sms/logout') {
    include $controllerPath === '/Controller/auth/logoutController.php';
}