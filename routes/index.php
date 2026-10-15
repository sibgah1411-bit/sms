<?php
$basePath = dirname(__DIR__);
include $basePath . '/authmiddleware.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start(); 
}
middleware($request);
include $basePath . '/routes/auth.php';
include $basePath . '/routes/students.php';
include $basePath . '/routes/teachers.php';
