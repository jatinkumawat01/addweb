<?php
ob_start();
error_reporting(0);
include("db.php");
$email = $_REQUEST['email'];
$OTP = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);


require_once 'PHPMailer.php';
require_once 'Exception.php';
require_once 'SMTP.php';

$err = array();

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();  // the mailer is set to use SMTP
$mail->SMTPDebug = 1; // 1 - errors & messages; 2 - messages only
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true; // SMTP authentication is turned on
$mail->Username = "jatinkumawat0113@gmail.com";  // SMTP username
$mail->Password = "Jatin@9799"; // SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->From = $email;
$mail->FromName = "Jatin Kumawat";     // name is optional
$mail->AddAddress($email);
$mail->AddReplyTo($email, "Hello");

$mail->WordWrap = 50;  // set word wrap to 50 characters
$mail->IsHTML(true); // set email format to HTML

$mail->Subject = "Email confirmation mail.";
$mail->Body    = "<h2>Your password has been reset.</h2> <br/><br/>Your OTP is:-> $OTP";

if (!$mail->Send()) {
    // $err['mail'] = $mail->ErrorInfo;
}



// <!-- header("Location:forgetPassword.php?OTP=$OTP"); -->
try{
$sql="update Customer set OPT =:OTP where email=:email)";
$query = $pdo->prepare($sql);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->bindParam(':OTP', $OTP, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $pdo->lastInsertId();
if ($lastInsertId != "") {
    echo "Data inserted Successfully";
    //header("Location:verify.php?email=$email");
} else {
    echo "Error in inserting";
}
} catch (PDOException $e) {
die("Could not connect to the database :" . $e->getMessage());
}


?>