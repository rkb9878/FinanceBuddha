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
    <table class="table table-hover table-striped" id="myTable">
        <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>Message</th>
            <th>Date & Time</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM `contact` ORDER BY id ASC ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $count=1;
                ?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><?php echo $row['msg']?></td>
                    <td><?php echo $row['datetime']?></td>
                </tr>
                <?php
                $count++;
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