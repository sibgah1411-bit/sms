<?php
include $controllerPath . 'studentController.php';
if ($request == '/sms/' || $request == '/sms/index.php') {
    index();
    include $viewPath . 'students/index.php';
} 
if (str_contains($request, 'students/create')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        add();
    }
    include $viewPath . 'students/add.php';
}
elseif (str_contains($request, 'students/delete')) {
    delete();
}
elseif (str_contains($request, 'students/update')) {
    update();
    include $viewPath . 'students/update.php';
}
