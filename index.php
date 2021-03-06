<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home-Loan</title>
    <?php include 'headerfiles.php' ?>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body style="background: #FFFFFF">

<?php include 'navbar.php' ?>

<header>
    <div class="container">
        <div class="wrapper">
            <div class="header-container-left">
                <h1 style="font-size: 2rem;color: white;font-weight: bold">Not just a Loan Comparison site</h1>
                <h2 style="font-size: 1rem;color: white;font-weight: bold">We get you the cheque also.</h2>
                <br>
                <br>
                <form action="home-loan.php">
                    <div class="jss246 jss245">
                        <!--                        <div class="input-group bg-white">-->
                        <span class="input-group-addon font-weight-bold" style="padding: 7px">i am looking for</span>
                        <select name="loan" id="loan" class="form-control">
                            <option>Instant Personal Loan</option>
                            <option>Personal Loan</option>
                            <option>Debt Consolidation</option>
                            <option>Home lone</option>
                            <option>Business lone</option>
                        </select>
                        <span class="input-group-addon font-weight-bold" style="padding: 7px">For (₹) * 10 Lakh</span>
                        <input type="number" name="amount" id="amount" class="form-control" value="100000">
                        <div class="input-group-btn text-center">
                            <input type="submit" class="btn jss260" value="search">
                        </div>
                        <!--                        </div>-->
                    </div>

                </form>
            </div>
            <div class="header-container-right">
                <div>
                    <a href="home-loan.php" class="">
                        <button class="btn header-button"><i class="fa-2x fas  fa-home"></i><b style="font-size: 18px">
                                &nbsp;&nbsp;Home Loan</b>
                        </button>
                    </a>
                </div>
                <div>
                    <a href="Personal-loan.php">
                        <button class="btn header-button"><i class="fa-2x fas fa-wallet"></i><b style="font-size: 18px">
                                &nbsp; Personal
                                Loan</b></button>
                    </a>
                </div>
                <div>
                    <a href="business-loan.php">
                        <button class="btn header-button"><i class="fa-2x fas fa-briefcase"></i><b
                                    style="font-size: 18px"> Business
                                Loan</b></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="container-work">
    <div class="text-center">
        <h2 class="heading-h2" style="font-weight: 300">HOW IT WORKS</h2>
    </div>
    <br>
    <div class="work-box work-box-shadow">
        <div class="work-box-content ">
            <div class="image-div">
                <div class="work-image-background">
                    <img src="images/work/compare%20online.png" class="work-image" alt="">
                </div>
            </div>
            <h6 class="jss412 font-weight-bold">Compare Online</h6>
            <p class="work-p font-weight-bold">
                Comparison of loan offers from all major Banks and NBFC's
            </p>
        </div>
        <div class="work-box-content">
            <div class="image-div">
                <div class="work-image-background">
                    <img src="images/work/apply%20online.png" class="work-image" alt="">
                </div>
            </div>
            <h6 class="jss412 font-weight-bold">APPLY ONLINE</h6>
            <p class="work-p font-weight-bold">
                Choose Suitable Loan Offers using our smart Search feature and apply
            </p>
        </div>
        <div class="work-box-content">
            <div class="image-div">
                <div class="work-image-background">
                    <img src="images/work/get%20advice.png" class="work-image" alt="">
                </div>
            </div>
            <h6 class="jss412 font-weight-bold">GET ADVICE</h6>
            <p class="work-p font-weight-bold">
                Advisory service from Finance Buddha to find best Suitable Loan Offers
            </p>
        </div>
        <div class="work-box-content">
            <div class="image-div">
                <div class="work-image-background">
                    <img src="images/work/paperwork%20help.png" class="work-image" alt="">
                </div>
            </div>
            <h6 class="jss412 font-weight-bold">PAPERWORK HELP</h6>
            <p class="work-p font-weight-bold">
                Documentation Assistance and application of loan
            </p>
        </div>
        <div class="work-box-content">
            <div class="image-div">
                <div class="work-image-background">
                    <img src="images/work/loan%20disbursal.png" class="work-image" alt="">
                </div>
            </div>
            <h6 class="jss412 font-weight-bold">Loan Disbursal</h6>
            <p class="work-p font-weight-bold">
                Signing of loan agreements and coordinating fund transfer
            </p>
        </div>
    </div>
    <div class="text-center" style="margin-top: 80px">
        <button href="#" class="btn font-weight-bold text-white startnow" data-toggle="modal" data-target="#myModal">Apply Now</button>
    </div>
</section>

<section class="customer-love">
    <div class="text-center">
        <h2 class="heading-h2" style="font-weight: 300;margin-bottom: 0">HOW IT WORKS</h2>
        <p style="margin-top: 3px">Our picks for the hottest offers and coolest deals all in one place</p>
    </div>
    <br>
    <div class="customer-love-box">
        <div id="customer-love-box1">
            <img src="images/custlove/instaloan.png" width="100%" alt="">
            <div class="text-alians ">
                <p style="margin: 0" class="customer-love-p">INSTA LOAN</p>
                <div>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span class="font-weight-bold">5(1)</span>
                </div>
                <div class="customer-p">100% Paperless Loan</div>
                <div class="customer-p">Instant eApproval</div>
                <div class="customer-p"><b>24 Hours</b> Disbursal</div>
            </div>
        </div>
        <div id="customer-love-box2">
            <img src="images/custlove/hdfc%20personal%20loan.png" width="100%" alt="">
            <div class="text-alians ">
                <p style="margin: 0" class="customer-love-p">HDFC PERSONAL LOAN</p>

                <div>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="far fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="far fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="far fa-star text-warning star-border"></span>
                    <span class="font-weight-bold">2(1)</span>
                </div>
                <div class="customer-p">Interest Rates starting @15.5%</div>
                <div class="customer-p">Minimal Documentation</div>
                <div class="customer-p">Up to <b>5 Years</b> Tenure</div>
            </div>
        </div>
        <div id="customer-love-box3">
            <img src="images/custlove/personal%20line%20of%20credit.png" width="100%" alt="">
            <div class="text-alians ">
                <p style="margin: 0" class="customer-love-p">PERSONAL LINE OF CREDIT</p>
                <div>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span class="font-weight-bold">5(1)</span>
                </div>
                <div class="customer-p">Credit Line up to ₹500,000</div>
                <div class="customer-p">Pay Only for Used Amount</div>
                <div class="customer-p">3 Step Application</div>
            </div>
        </div>
        <div id="customer-love-box4">
            <img src="images/custlove/sbi%20home%20loan.png" width="100%" alt="">
            <div class="text-alians ">
                <p style="margin: 0" class="customer-love-p">SBI HOME LOAN</p>
                <div>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="far fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="far fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="far fa-star text-warning star-border"></span>
                    <span class="font-weight-bold">2(1)</span>
                </div>

                <div class="customer-p">Interest Rates starting @9.10%</div>
                <div class="customer-p">Quick Processing</div>
                <div class="customer-p"><b>30 Years</b> Tenure</div>
            </div>
        </div>
        <div id="customer-love-box5">
            <img src="images/custlove/hdfc%20home%20loan.png" width="100%" alt="">
            <div class="text-alians ">
                <p style="margin: 0" class="customer-love-p">HDFC HOME LOAN</p>
                <div>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="far fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="far fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="far fa-star text-warning star-border"></span>
                    <span class="font-weight-bold">2(1)</span>
                </div>
                <div class="customer-p">Interest Rates starting @8.8%</div>
                <div class="customer-p">0 Prepayment Charges</div>
                <div class="customer-p"><b>30 Years</b> Tenure</div>
            </div>
        </div>

        <div id="customer-love-box6">
            <img src="images/custlove/hdfc%20business%20loan.png" width="100%" alt="">
            <div class="text-alians ">
                <p style="margin: 0" class="customer-love-p">HDFC BUSINESS LOAN</p>
                <div>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="fa fa-star text-warning star-border"></span>
                    <span style="font-size: 15px" class="far fa-star text-warning star-border"></span>
                    <span class="font-weight-bold">4(1)</span>
                </div>
                <div class="customer-p">Interest Rates starting @15.65%</div>
                <div class="customer-p">Borrow up to ₹ 5,000,000</div>
                <div class="customer-p"><b>4 Years</b> Tenure</div>
            </div>
        </div>
    </div>
</section>

<section class="brands pt-5 pb-3">
    <div class="getintouch">
        <div class="getWraper">
            <div class="getWraper-left">
                <div class="text-center ">
                    <h5 class="text-white">Unable to Decide? Get in Touch with Us </h5>
                    <h6 class="text-white"><a class="text-white" href="">query@financebuddha.org</a></h6>
                </div>
                <form action="emailsend/getintouch.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-row border-input">
                                    <label for="name" class="text-white">Name*</label>
                                    <input type="text" id="name" name="name" required
                                           class="input-1000">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-row border-input">
                                    <label for="email" class="text-white">Email Id*</label>
                                    <input type="email" id="email" name="email" required
                                           class="input-1000">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-row border-input">
                                    <label for="mobile" class="text-white">Mobile No*</label>
                                    <input type="text" id="mobile" name="mobile" required
                                           class="input-1000">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-row border-input">
                                    <label for="city" class="text-white">City (India)*</label>
                                    <input type="text" id="city" name="city" required
                                           class="input-1000">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center form-group pt-2">
                        <button class="btn jss452 text-white">Submit</button>
                    </div>
                </form>
            </div>
            <div class="getWraper-right">
                <!--                <div>-->
                <!--                    <h5 class="text-white">Learn How to Manage Your Money to Retire Wealthy!</h5>-->
                <!--                    <form action="emailsend/subscribe.php" method="post">-->
                <!--                        <div class="form-group">-->
                <!--                            <input type="text" class="form-control" style="height: 60px" name="email" id="email"-->
                <!--                                   required placeholder="Email Id*">-->
                <!--                        </div>-->
                <!--                        <div class="text-center">-->
                <!--                            <button class="btn jss452 text-white">Subscibe</button>-->
                <!--                        </div>-->
                <!--                    </form>-->
                <!--                </div>-->
                <div class="subscribe-wrapper">
                    <h4>SUBSCRIBE</h4>
                    <form action="emailsend/subscribe.php" method="post">
                        <input type="email" name="email" class="subscribe-input" placeholder="Your e-mail">
                        <div class="submit-btn">SUBMIT</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="brnds-image">
        <div class="img-pro">
            <img class="jss428" src="images/theEconomeTime.png" alt="">
        </div>
        <div>
            <img class="jss428" src="images/vccirc.png" alt="">
        </div>
        <div>
            <img class="jss428" src="images/businessTime.png" alt="">
        </div>
        <div>
            <img class="jss428" src="images/liveMint.png" alt="">
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 " style="background: #FF9F18">
                <div class="text-center p-4">
                    <img src="images/high%20interest.png" style="width: 8em" alt="">
                    <h6 class="text-white heading-h6 rate-interst-h6">Rate of Interest is high ?</h6>

                </div>
            </div>
            <div class="col-sm-4 " style="background: #EA2F35">
                <div class="text-center p-4">
                    <img src="images/desired%20loan%20amount.png" style="width: 8em" alt="">
                    <h6 class="text-white heading-h6 rate-interst-h6">Not getting the desired Loan Amount?</h6>

                </div>
            </div>
            <div class="col-sm-4 " style="background: rgb(31, 194, 182)">
                <div class="text-center p-4">
                    <img src="images/multiple%20loans.png" style="width: 8em" alt="">
                    <h6 class="text-white heading-h6 rate-interst-h6">Have multiple existing loans?</h6>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="banking-partner container mb-5">
    <div class="text-center">
        <h2 class="heading-h2" style="font-weight: 300">Banking Partners</h2>
    </div>
    <div class="brand-images">
        <div class=" p1">
            <div class="bankpartnerBox">
                <img class="jss466" src="images/bank/icici.png" alt="">
            </div>
        </div>
        <div class="bankpartnerBox p2">
            <img class="jss466" src="images/bank/hdfc.png" alt="">
        </div>
        <div class="bankpartnerBox p3">
            <img class="jss466" src="images/bank/indusind.png" alt="">
        </div>
        <div class=" bankpartnerBox p4">
            <img class="jss466" src="images/bank/axis.png" alt="">
        </div>
        <div class=" bankpartnerBox p5">
            <img class="jss466" src="images/bank/bajaj.png" alt="">
        </div>
        <div class=" bankpartnerBox p6">
            <img class="jss466" src="images/bank/tata.png" alt="">
        </div>
        <div class="bankpartnerBox p7">
            <img class="jss466" src="images/bank/kotak.png" alt="">
        </div>
        <div class="bankpartnerBox p8">
            <img class="jss466" src="images/bank/dhfl.png" alt="">
        </div>
        <div class=" bankpartnerBox p9">
            <img class="jss466" src="images/bank/pnb.png" alt="">
        </div>
        <div class=" bankpartnerBox p10">
            <img class="jss466" src="images/bank/capital-first.png" alt="">
        </div>
    </div>
</section>

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
                <p>Thank you <i class="fas fa-check-circle text-success"></i></p>
            </div>
            <div class="modal-footer">
                <!--                <button type="button" class="btn btn-primary">Save changes</button>-->
                <button type="button" class="btn close" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!--<div class="modal" id="emailloan" tabindex="-1" role="dialog">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h5 class="modal-title ">LOAN APPLY FORM</h5>-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                </button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                -->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <!--                <button type="button" class="btn btn-primary">Save changes</button>-->-->
<!--                <button type="button" class="btn close" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->



<?php include 'footer.php' ?>

<!--<script type="text/javascript">-->
<!--    $(window).on('load', function () {-->
<!--        $('#myModal').modal('show');-->
<!--    });-->
<!--</script>-->



<?php
//if (isset($_GET['getintouch']) or isset($_GET['subscibe']) or isset($_GET['loanApply'])) {
//    if ($_GET['getintouch'] == 1 or $_GET['subscibe'] == 1 or $_GET['loanApply']) {
//        ?>
<!--        <script type="text/javascript">-->
<!--            $(window).on('load', function () {-->
<!--                $('#emailsent').modal('show');-->
<!--            });-->
<!--        </script>-->
<!--        --><?php
//    }
//}
//?>


</body>
</html>
