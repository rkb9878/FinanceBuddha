<!DOCTYPE html>
<html lang="en">
<head>
    <title>contact-us</title>
    <meta charset="UTF-8"/>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include "headerfiles.php"; ?>
    <link rel="stylesheet" type="text/css" href="contact/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contact/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contact/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contact/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contact/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contact/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contact/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="contact/css/util.css">
    <link rel="stylesheet" type="text/css" href="contact/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<?php include 'navbar.php' ?>
<br>
<br>
<br>


<div class="container-fluid bg-white p-3">
    <h4 class="heading-h4 text-center">Contact Us</h4>
</div>
<div class="m-3">
    <div class="contact-us-box">
        <div class="contact-us-left box-shadow">
            <h5 class="heading-h5">Address</h5>
            <h6 class="heading-h6">Finance Buddha</h6>
            <p>1st floor, 9th Cross, <br>
                Jeevan Bheema Nagar,<br>
                HAL 3rd Stage,<br>
                Bangalore - 560075.<br>
                Telephone: 7044461246</p>

            <h6 class="heading-h6">E-mail</h6>
            <p>
                Loans: query@financebuddha.org <br>
                Customer Relations: support@financebuddha.com <br>
                <!--                For Others: info@financebuddha.com <br>-->
            </p>
            <br>
            <br>
        </div>
        <div class="contact-us-right box-shadow">
            <!--                <h5 class="heading-h5">Get in Touch</h5></div>-->
            <!--            <form action="emailsend/sendEnquiry.php" method="post" accept-charset="utf-8">-->
            <!--                <div class="modal-body" style="padding: 5px;">-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">-->
            <!--                            <input class="form-control" name="firstname" placeholder="Firstname" type="text" required-->
            <!--                                   autofocus/>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">-->
            <!--                            <input class="form-control" name="lastname" placeholder="Lastname" type="text" required/>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">-->
            <!--                            <input class="form-control" name="email" placeholder="E-mail" type="email" required/>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">-->
            <!--                            <input class="form-control" name="subject" placeholder="Subject" type="text" required/>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-lg-12 col-md-12 col-sm-12">-->
            <!--                            <textarea style="resize:vertical;" class="form-control" placeholder="Message..." rows="6"-->
            <!--                                      name="comment" required></textarea>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                                <div class="panel-footer text-center" style="margin-bottom:-14px;">-->
            <!--                                    <input type="submit" class="btn btn-success w-25" value="Send"/>-->
            <!--                                </div>-->
            <!--            </form>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.021482461973!2d77.65088941437297!3d12.970477118413376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16aaaeffe7c9%3A0x61edbe36330d2834!2sFinance%20Buddha!5e0!3m2!1sen!2sin!4v1598469393201!5m2!1sen!2sin"
                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="mt-4 p-4 bg-white box-shadow">
                <form class="contact100-form validate-form" method="post" action="emailsend/sendEnquiry.php">
                    <div class="contact100-form-title text-center">
                        Get in Touch
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <input class="input100" id="name" type="text" required name="name" placeholder="Name">
                        <label class="label-input100" for="name">
                            <span class="lnr lnr-user"></span>
                        </label>
                    </div>

                    <div class="wrap-input100 validate-input"
                         data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" id="email" required type="text" name="email" placeholder="Email">
                        <label class="label-input100" for="email">
                            <span class="lnr lnr-envelope"></span>
                        </label>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Phone is required">
                        <input class="input100" id="phone" required type="text" name="phone" placeholder="Phone">
                        <label class="label-input100" for="phone">
                            <span class="lnr lnr-phone-handset"></span>
                        </label>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                        <textarea class="input100" name="message" required placeholder="Your message..."></textarea>
                    </div>

                    <div class="panel-footer text-center pb-4" style="margin-bottom:-14px;">
                        <input type="submit" class="btn btn-primary w-25" style="background: darkblue" value="Send"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="emailsent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
<!--            <div class="modal-header">-->
<!--                <h5 class="modal-title">Modal title</h5>-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                </button>-->
<!--            </div>-->
            <div class="modal-body">
                <p>Thank you For Contact <i class="fas fa-check-circle text-success"></i></p>
            </div>
            <div class="modal-footer">
                <!--                <button type="button" class="btn btn-primary">Save changes</button>-->
                <button type="button" class="btn close" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
<?php
if (isset($_GET['count'])) {
    if ($_GET['count'] == 1) {
        ?>
        <script type="text/javascript">
            $(window).on('load', function () {
                $('#emailsent').modal('show');
            });
        </script>
        <?php
    }
}
?>
</body>
</html>
