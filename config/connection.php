<?php
date_default_timezone_set('Asia/Karachi');
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";
$con = mysqli_connect($host, $user, $pass, $db);
if ($con) {
    echo "";
} else {
    echo "DB not connected";
}
?>