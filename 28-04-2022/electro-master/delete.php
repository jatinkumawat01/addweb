<?php
error_reporting(0);
ob_start();
include("db.php");
$id=$_REQUEST['id'];
$email=$_REQUEST['email'];
$pname=$_REQUEST["tname"];


try {
    $pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");

    $sql = "delete from wishList where ProductId=:ProductId and ProductName=:ProductName and UserMail=:UserMail";
	$query = $pdo -> prepare($sql);
	$query -> bindParam(':UserMail', $email, PDO::PARAM_STR);
	$query -> bindParam(':ProductId', $id, PDO::PARAM_STR);
	$query -> bindParam(':ProductName', $pname, PDO::PARAM_STR);
    $query -> execute();
	$lastInsertId=$pdo->lastInsertId();
	if($lastInsertId!=""){
   header("Location:wishlist.php");
}
    else
	{
		echo "Error in Deleting";
	}
		
   
} 
catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>