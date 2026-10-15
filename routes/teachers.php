<?php
require $controllerPath . 'teacherController.php';
if (str_contains($request, 'teachers/create')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        addTeacher();
    }
    include $viewPath . 'teachers/add.php';
} 
elseif (str_contains($request, 'teachers/update')) {
     updateTeacher();
     include $viewPath . 'teachers/update.php';

}
elseif (str_contains($request, 'teachers/delete')) {
    deleteTeacher();
}
elseif (str_contains($request, 'teachers')) {
    indexTeacher();
    // include $viewPath . 'teachers/index.php';
}
