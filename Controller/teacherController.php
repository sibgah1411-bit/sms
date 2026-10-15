<?php
function deleteTeacher(){
    global $con, $data;
    $id = $_GET['id'];
    $query = "DELETE FROM teacher WHERE id='$id'";
    mysqli_query($con,$query);
    header("Location: /sms/teachers");
    
}
function updateTeacher(){
    global $con, $data, $row, $id;
    $id=$_GET['id'];
    $select="SELECT*FROM teacher WHERE id='$id'";
    $data=mysqli_query($con,$select);
    $row=mysqli_fetch_array($data);
        if (isset($_POST['update_btn'])) {
            $fname=$_POST['first_name'];
            $lname=$_POST['last_name'];
            $courses=$_POST['courses'];
            $salary=$_POST['salary'];
            $section=$_POST['section'];
            $date=$_POST['hire_date'];
            $update = "UPDATE teacher SET first_name='$fname', last_name='$lname', courses='$courses', salary='$salary', section='$section', hire_date='$date' WHERE id='$id'";
            $data = mysqli_query($con, $update);
            if ($data) {
                header("Location: /sms/teachers");
                exit();
                }
        }        
}
function indexTeacher(){
    global $con, $data, $viewPath;
    $query = "SELECT * FROM teacher ORDER BY id DESC";
    $data = mysqli_query($con, $query);
    return include $viewPath . 'teachers/index.php';

}
function addTeacher(){
    global $con, $data;
    if(isset($_POST['save_btn'])){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $courses = $_POST['courses'];
        $salary = $_POST['salary'];
        $section = $_POST['section'];
        $date = $_POST['hire_date'];
        $query = "INSERT INTO teacher
        (first_name,last_name,courses,salary,section,hire_date)
        VALUES
        ('$fname','$lname','$courses','$salary','$section','$date')";
        $data = mysqli_query($con,$query);
        if($data){
            header("Location: /sms/teachers");
            exit();
        }
    }
}