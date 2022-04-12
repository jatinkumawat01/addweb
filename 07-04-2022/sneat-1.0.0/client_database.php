<?php
ob_start();
error_reporting(0);
session_start();  

$email=$_SESSION['email'];
$password=$_SESSION['password'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from student12 where email='$email'") or die("Error in query");
while($row=mysqli_fetch_array($query))
        { 
            $username=$row['name'];
            $mobile=$row["mobile"];
            $address =$row["address"];
            $email=$row["email"];
            $pswd=$row["password"];
        } 
?>