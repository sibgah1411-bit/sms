<?php
include './config/connection.php';
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$viewPath = './View/';
$controllerPath = './Controller/';
ob_start();
include './routes/index.php';
$content = ob_get_clean();
include './layout/app.php';