<?php
error_reporting(0);
$email=$_REQUEST['email'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");

$delete=mysqli_query($con,"delete from student12  where  email='$email' ") or die("Error in query");

header('Location:admin.php');

mysqli_close($con);



?>