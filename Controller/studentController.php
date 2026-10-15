<?php
function add(){
    global $con, $data;
    if(isset($_POST['save_btn'])){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $age = $_POST['age'];
        $rno = $_POST['roll_no'];
        $section = $_POST['section'];
        $date = $_POST['date'];
        $query = "INSERT INTO student
        (first_name,last_name,age,roll_no,section,date)
        VALUES
        ('$fname','$lname','$age','$rno','$section','$date')";
        $data = mysqli_query($con,$query);
        if($data){
            header("Location: /sms/");
            exit();
        }
    }
}
function delete(){
    global $con, $data;
    $id = $_GET['id'];
    $query = "DELETE FROM student WHERE id='$id'";
    mysqli_query($con,$query);
    header("Location: /sms/");
    }
function update(){
    global $con, $data, $row, $id;
    $id = $_GET['id'];
    $select = "SELECT * FROM Student WHERE id='$id'";
    $data = mysqli_query($con, $select);
    $row = mysqli_fetch_array($data);
    if (isset($_POST['update_btn'])) {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $age = $_POST['age'];
        $rno = $_POST['roll_no'];
        $section = $_POST['section'];
        $date = $_POST['date'];
        $update = "UPDATE Student SET first_name='$fname', last_name='$lname', age='$age', roll_no='$rno', section='$section', date='$date' WHERE id='$id'";
        $data = mysqli_query($con, $update);
        if ($data) {
            header("Location: /sms/");
            exit();
        }
    }
}
function index(){
    global $con, $data;
    $query = "SELECT * FROM student ORDER BY id DESC";
    $data = mysqli_query($con, $query);
}