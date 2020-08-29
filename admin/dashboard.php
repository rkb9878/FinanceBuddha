<!doctype html>
<html lang="en">
<head>
    <?php
    session_start();
    if (!isset($_SESSION['admindetail'])) {
        header("location:index.php");
    }
    ?>
    <title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'adminHeader.php' ?>
</head>
<body>

<?php include 'navbarHead.php' ?>
<div class="text-center">
    <h1>WellCome Admin</h1>
</div>


<?php include "adminFooter.php"; ?>
</body>
</html>