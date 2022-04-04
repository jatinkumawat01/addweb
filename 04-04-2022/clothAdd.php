
<html>
<head>
<title>Cloth Product image file Upload</title>
</head>
<body>

<form enctype="multipart/form-data" method="post">
Enter Id:
<input type-="text" name="id"/><br/>
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>

<a href="clothimg.php">Image</a>
</form>
<?php
$con=mysqli_connect("localhost","root","","batch6");
if(isset($_POST['Submit1']))
{ 
    $id=$_POST['id'];
$filepath = "image/cloth/" . $_FILES["file"]["name"];

$sql = "INSERT into cloth (ImgId,img_path) VALUES ($id,'$filepath')";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$query =mysqli_query($con, $sql);
if($query) 
{
echo "Data Inserted";
} 
else 
{
echo "Error !!";
}
}
?>

</body>
</html>