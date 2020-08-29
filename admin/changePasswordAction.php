<?php
include '../database/database.php';
$username = $_POST['username'];
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];

$query = "select * from `admin` where username='$username' and password='$oldpassword'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $query2 = "UPDATE `admin` SET `password`='$newpassword' WHERE  `username`='$username'";
    if (mysqli_query($conn, $query2)) {
        header("Location: changePassword.php?s=sucess");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    header("Location: changePassword.php?s=not");
}
