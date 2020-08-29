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
    <h1>Contact</h1>
</div>
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>Message</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM `contact` ORDER BY id DESC";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><?php echo $row['msg']?></td>
                </tr>
                <?php
            }
        }else {
            ?>
            <div class="alert alert-danger">
                No Data Found
            </div>
            <?php
        } ?>
        </tbody>
    </table>
</div>

<?php include 'adminFooter.php' ?>
</body>
</html>