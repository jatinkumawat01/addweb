<?php
$tname=$_REQUEST['tname'];
$Id=$_REQUEST['id'];
$email=$_REQUEST['email'];
try {
	$pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
	$SQL1="select * from $tname where ImgId=$Id";
	$q1 = $pdo->query($SQL1);
	$q1->setFetchMode(PDO::FETCH_ASSOC);
	while($row1=$q1->fetch())
		{
			$path1=$row1['img_path'];
			$b=$row1["brand"];
			$c=$row1['color'];
			$s=$row1['size'];
            
			

		}
	}
 
catch (PDOException $e) {
	die("Could not connect to the database $dbname :" . $e->getMessage());
	}
try {
	$qu=1;

	$pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
	$sql = "insert into AddToCart(UserMail,ProductName, ProductId, ProductBrand, Quantity,img_path) values(:UserMail,:ProductName, :ProductId, :ProductBrand, :size,:color, :Quantity,:img_path)";
	$query = $pdo -> prepare($sql);
	$query -> bindParam(':UserMail', $email, PDO::PARAM_STR);
    $query -> bindParam(':ProductName', $tname, PDO::PARAM_STR);
	$query -> bindParam(':ProductId', $Id, PDO::PARAM_STR);
	$query -> bindParam(':ProductBrand', $b, PDO::PARAM_STR);
	
    $query -> bindParam(':Quantity', $qu, PDO::PARAM_STR);
	$query -> bindParam(':img_path', $path1, PDO::PARAM_STR);
	echo $sql;
	//$q->setFetchMode(PDO::FETCH_ASSOC);
	$query -> execute();
	$lastInsertId=$pdo->lastInsertId();
	if($lastInsertId!="")
		{
		echo "Data Inserted Successfully";
		header("Location:productView.php?tname=$tname");
		}
	else
		{
		echo "Error in Inserting";
		}
	}
catch (PDOException $e) {
die("Could not connect to the database :" . $e->getMessage());
}


	

?>