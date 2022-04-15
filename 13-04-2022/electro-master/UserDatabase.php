<?php

function heart($mail,$name,$Id,$file_path,$Brand,$Size,$Color,$qu){
	try {

		$pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
		$sql = "insert into wishList(UserMail,ProductName, ProductId, ProductBrand, size,color Quantity,img_path) values('$mail','$name',$Id,'$Brand','$Size','$Color',$qu,'$file_path')";
		$q = $pdo->query($sql);
    	$q->setFetchMode(PDO::FETCH_ASSOC);
		$q -> execute();
		$lastInsertId=$pdo->lastInsertId();
		if($lastInsertId!="")
	{
		echo "Data Inserted Successfully";
	}
	else
	{
		echo "Error in Inserting";
	}
}
 catch (PDOException $e) {
    die("Could not connect to the database :" . $e->getMessage());
}


}

?>

<button name="foo" type="button" value="bar"
                                                    onclick="<?php heart($email,$tname,$id,$filepath,$brand,$size,$color,1); ?>">
                                                    <img src="heart.png" height=20px width=20px> </button>


<input type="image" src="heart.png" name="submit" width="100" height="48" formmethod='post' alt="submit"/>
<a href="wishlist.php?tname=<?php echo $tname;?>&id=<?php echo $id;?>&email=<?php echo $email;?>"><i class="fa fa-heart" aria-hidden="true"></i></a>
