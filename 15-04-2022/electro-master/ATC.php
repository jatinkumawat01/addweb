<?php
include("db.php");
$tname=$_REQUEST['tname'];
$Id=$_REQUEST['id'];
$email=$_REQUEST['email'];
$brand=$_REQUEST['brand'];
$Quantity=$_REQUEST['Quantity'];
$color=$_REQUEST['color'];
$size=$_REQUEST['size'];
$price=$_REQUEST['price'];
$filepath=$_REQUEST['img_path'];

//echo "email=$email<br>tname=$tname<br>id=$Id<br>brand=$brand<br>Quantity=$Quantity<br>color=$color<br>size=$size<br>price=$price<br>img_path=$filepath";

try {
	$qu=1;

	$sql = "insert into AddToCart(UserMail,ProductName, ProductId, ProductBrand,ProductPrice,color,size , Quantity,img_path) values(:UserMail,:ProductName, :ProductId, :ProductBrand, :ProductPrice,:color,:size, :Quantity,:img_path)";
	$query = $pdo -> prepare($sql);
	$query -> bindParam(':UserMail', $email, PDO::PARAM_STR);
    $query -> bindParam(':ProductName', $tname, PDO::PARAM_STR);
	$query -> bindParam(':ProductId', $Id, PDO::PARAM_STR);
	$query -> bindParam(':ProductBrand', $brand, PDO::PARAM_STR);
	$query -> bindParam(':ProductPrice', $price, PDO::PARAM_STR);
	$query -> bindParam(':color', $color, PDO::PARAM_STR);
	$query -> bindParam(':size', $size, PDO::PARAM_STR);
    $query -> bindParam(':Quantity', $Quantity, PDO::PARAM_STR);
	$query -> bindParam(':img_path', $filepath, PDO::PARAM_STR);
	//$sql1 = "insert into AddToCart(UserMail,ProductName, ProductId, ProductBrand,ProductPrice,color,size , Quantity,img_path) values('$email','$tname', $Id, '$brand','$price' ,'$color','$size', '$Quantity','$filepath')";
	echo $sql1;
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