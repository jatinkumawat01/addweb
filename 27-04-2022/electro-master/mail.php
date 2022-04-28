<?php

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

$mail->From = "jatinkumawat0112@gmail.com";
$mail->FromName = "Jatin Kumawat";	 // name is optional
$mail->AddAddress('jatin.k.addweb@gmail.com');
$mail->AddReplyTo("jatin.k.addweb@gmail.com", "Hello");

$mail->WordWrap = 50;  // set word wrap to 50 characters
$mail->IsHTML(true); // set email format to HTML

$mail->Subject = "Hello from jatin!";
$mail->Body    = "Hello Friend, <br/><br/> Greetings! </br/>Thank you,<br/>Dennis";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send()) {
   $err['mail'] = $mail->ErrorInfo;
}
?>