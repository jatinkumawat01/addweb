<html>
<head>
<title>PHP CURD Operation using PDO Extension  </title>
</head>
<body>
<h3>Insert Record | PHP CRUD Operations using PDO Extension</h3>
<form name="insertrecord" method="post">
Id: <input type="text" name="ImgId" required><br/>
Details:<input type="text" name="details" required><br/>
Prize:<input type="text" name="prize" required><br/>
Title:<input type="text" name="title" required><br/>
Highlights:<input type="text" name="Highlights" required><br/>
<input type="submit" name="insert" value="Submit"><br/>
</form>
</body>
</html>

<?php
if(isset($_POST['insert']))
{
	$ImgId=$_POST['ImgId'];
	$details=$_POST['details'];
	$price=$_POST['prize'];
	$title=$_POST['title']; 
    $highlights=$_POST['Highlights'];
try {
    $pdo = new PDO("mysql:host=localhost;dbname=batch6", "root", "");
    $sql = 'insert into decor(ImgId, details, prize, title, Highlights) values(:ImgId,:details,:prize,:title ,:Highlights)';
	$query = $pdo -> prepare($sql);
	$query -> bindParam(':ImgId', $ImgId, PDO::PARAM_STR);
	$query -> bindParam(':details', $details, PDO::PARAM_STR);
	$query -> bindParam(':prize', $price, PDO::PARAM_STR);
	$query -> bindParam(':title', $title, PDO::PARAM_STR);
    $query -> bindParam(':Highlights', $highlights, PDO::PARAM_STR);
    
	$query -> execute();
	$lastInsertId=$pdo->lastInsertId();
	if($lastInsertId!="")
	{
		echo "Data Inserted Successfully";
	}
	else
	{
		echo "Error in Inserting";
	}
    //$query->setFetchMode(PDO::FETCH_ASSOC);
	// while($row=$query->fetch())
	// {
		// echo $row['id']." ".$row["name"]." ".$row['address']." ".$row['mobile']." "."<br>";
		
	// }
} catch (PDOException $e) {
    die("Could not connect to the database :" . $e->getMessage());
}
}
?>