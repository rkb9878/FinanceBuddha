<?php
session_start();
unset($_SESSION['admindetail']);
header("location:index.php");