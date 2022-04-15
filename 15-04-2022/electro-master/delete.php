<?php
error_reporting(0);
$id=$_REQUEST['id'];
$pname=$_REQUEST["tname"];


try {
    $pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");

    $sql = "delete from wishList where ProductId=:ProductId and ProductName=:ProductName";
	$query = $pdo -> prepare($sql);
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