<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thankyou</title>
    <?php include 'headerfiles.php'?>
</head>
<body>
<?php include 'navbar.php'?>
<section>
    <div class="text-center" style="margin-top: 130px; margin-bottom: 150px">
        <h1 class="display-4">Thank you! <?php echo $_GET['d']?></h1>
        <div>
            <span class="text-success"><i class="fa-4x fa fa-check-circle"></i></span>
        </div>
    </div>
</section>

<?php include 'footer.php'?>
</body>
</html>