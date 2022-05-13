<?php
ob_start();
error_reporting(0);
session_start();


if(!isset($_SESSION['email']))
{
    header("Location:auth-login-basic.php");
}
else{
  
    $con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
}


    