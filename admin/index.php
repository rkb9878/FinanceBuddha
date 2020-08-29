<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    if (isset($_SESSION['admindetail'])) {
        header("location:dashboard.php");
    }
    ?>
    <title>Login V19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../images/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminloginPage/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminloginPage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminloginPage/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminloginPage/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminloginPage/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminloginPage/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminloginPage/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminloginPage/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="adminloginPage/css/util.css">
    <link rel="stylesheet" type="text/css" href="adminloginPage/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form class="login100-form validate-form" action="loginaction.php" method="post">
					<span class="login100-form-title p-b-33">
						Finance Buddha
					</span>

                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="container-login100-form-btn m-t-20">
                    <button class="login100-form-btn">
                        Sign in
                    </button>
                </div>
                <?php
                if (isset($_GET['r'])) {
                    ?>
                    <div class="mt-2 text-center">
                        <div class="alert alert-danger">Incorrect Email or Password</div>
                    </div>
                    <?php
                }
                ?>

            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="adminloginPage/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="adminloginPage/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="adminloginPage/vendor/bootstrap/js/popper.js"></script>
<script src="adminloginPage/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="adminloginPage/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="adminloginPage/vendor/daterangepicker/moment.min.js"></script>
<script src="adminloginPage/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="adminloginPage/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="adminloginPage/js/main.js"></script>

</body>
</html>