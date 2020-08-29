<!doctype html>
<html lang="en">
<head>
    <?php include '../database/database.php' ?>

    <?php
    session_start();
    if (!isset($_SESSION['admindetail'])) {
        header("location:index.php");
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loan Application</title>
    <?php include 'adminHeader.php' ?>
</head>
<body>
<?php include 'navbarHead.php' ?>
<div class="text-center">
    <h1>Change Password</h1>
</div>
<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <form action="changePasswordAction.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="username"
                       value="<?php echo $_SESSION['admindetail'][0] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="oldPassword">old Password</label>
                <input type="password" class="form-control" name="oldpassword">
            </div>
            <div class="form-group">
                <label for="newPassword">New Password</label>
                <input type="password" class="form-control" name="newpassword">
            </div>
            <div class="text-center">
                <button class="btn btn-outline-primary w-25">Submit</button>
            </div>
            <div class="form-group mt-4">
                <?php
                if (isset($_GET['s'])) {
                    if ($_GET['s'] == 'sucess') {
                        ?>
                        <div class="alert alert-success">
                            Sucess Fully Update New password
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="alert alert-danger">
                            Incorrect old password
                        </div>
                        <?php

                    }
                }
                ?>
            </div>
        </form>
    </div>
</div>
<?php include 'adminFooter.php' ?>
</body>
</html>