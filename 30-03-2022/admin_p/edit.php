<?php
error_reporting(0);
$email=$_REQUEST['email'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from student12 where email='$email' ") or die("Error select in query");
while($row=mysqli_fetch_array($query))
{
    echo 'Hello  '.$row['name']."<br>";
    echo 'email= '.$row['email']."<br>";
    $n=$row['name'];
    $m=$row['mobile'];
    $a=$row['address'];
    $e=$row['email'];
    $p=$row['password'];
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method='post'>
        Name:<input type='text' name='name' value='<?php echo $n ?>' /><br>
        mobile No:<input type='int' name='mobile' value='<?php echo $m ?>' /><br />
        Address:<input type='text' name='address' value='<?php echo $a ?>' /><br />
        Password:<input type='text' name='password' value='<?php echo $p ?>' /><br />
        <input type='submit' name='Submit' value='Submit' />
    </form>

</body>

</html>
<?php
if (isset($_POST['Submit'])) {
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $pswd=$_POST['password'];



$insert=mysqli_query($con,"update student12 set name='$name',address='$address',mobile='$mobile',password='$pswd' where email='$email' ") or die("Error in update query");

header('Location:admin.php');

mysqli_close($con);

}


?>