<?php
//session_start();
require_once('class.phpmailer.php');
// include "connection.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['comment'];

$adminemail = "python.vmm.2020@gmail.com";
date_default_timezone_set("Asia/Kolkata");
$currentdateTime = date("l jS \of F Y h:i:s A");
//if ($captcha == $_SESSION["captcha"]) {
$msg = "<style>a
    {
    text-decoration:none !important;color:black !important;
    }p
    {
    margin: 1px 0px !important;
    padding:0px !important;
    }</style>
    <h2 style='text-align:center;background-color: #ff914d; color: white;padding: 10px 0px;'>
   New Enquiry From <small style='color: white;text-decoration:none;'>http://financebuddha.org/</small></h2><h3 style='text-align:left;color: black'>Dear Team JBK Services</h3> 
   <p style='text-align:left;color: black'>Congratulations you have received a new Enquiry from your website <span style='color: black;text-decoration:none;'>jbkservices.com.au</span> , we recommend you to kindly get in touch with the client with next 24 working hours</p>
<p ><strong style='text-align:left;color: black'>Name : " . $firstname . ' ' . $lastname . "</strong></p>
<p><strong style='text-align:left;color: black'>Email : " . $email . "</strong></p>
<p><strong style='text-align:left;color: black'>subject :".$subject." </strong></p>
<p style='text-align:left;color: black'><strong>Message: </strong>" . $message . "</p>
<p style='text-align:left;color: black'><strong>Extra Info: </strong>" . $currentdateTime . "</p>
<h3 style='text-align:left;color: black'>Thanks & Regards</h3>
<h4 style='text-align:left;color: black'>Website Development Team</h4>
";
date_default_timezone_set('Asia/Kolkata');
$mail = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug = 1;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";            // enable SMTP authentication
// sets the prefix to the servier
$mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port = 465;                   // set the SMTP port for the GMAIL server
$mail->Username = "python.vmm.2020@gmail.com";  // GMAIL username
$mail->Password = "pythonvmm2020";            // GMAIL password

$mail->SetFrom('python.vmm.2020@gmail.com', "Finance Buddha");

//$mail->AddReplyTo("service@jbkservices.com.au", "jbkservices");
$mail->AddReplyTo("python.vmm.2020@gmail.com", "pythonvmm2020");

$mail->Subject = "New Enquiry";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($msg);

// $address = "jbkservices@hotmail.com";
$address = 'rkb9878@gmail.com';
$mail->AddAddress($address);

//$mail->AddCC("shalinder@vmmeducation.com");

if (!$mail->Send()) {
    echo "No";
} else {
    header("Location: ../contact-us.php?count=1");
}



//
//} else {
//    echo "Invalid Captcha";
//}