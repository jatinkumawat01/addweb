<?php
error_reporting(0);
$Id=$_REQUEST['Id'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");

$delete=mysqli_query($con,"delete from shirt  where  ImgID='$Id' ") or die("Error in query");

header('Location:shirtimg.php');

mysqli_close($con);

  

?>