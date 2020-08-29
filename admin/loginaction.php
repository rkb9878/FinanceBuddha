<?php
session_start();
include_once '../database/database.php';
$username = $_POST['username'];
$password = $_POST['pass'];
$query = "SELECT * from `admin` where `username`='$username' and `password`='$password'";
if ($result = mysqli_query($conn, $query)) {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_row($result);
//        print_r($result);
        $_SESSION['admindetail'] = $row;
        header("Location: dashboard.php");
    } else {
        header("Location: index.php?r=fail");
    }
} else {
    echo "fail";
}
