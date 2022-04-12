<?php
$tname=$_REQUEST['tname'];
$Id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from $tname where ImgId=$Id ") or die("Error in query");

?>

<?php include("head.php"); ?>
	<body>
		<?php include('header.php'); ?>
