<?php
error_reporting(0);
$email=$_REQUEST['email'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from student12 where email='$email' ") or die("Error select in query");
while($row=mysqli_fetch_array($query))
{
    echo '<h1>Hello  '.$row['name']."</h1><br>";
    echo '<h1>email= '.$row['email']."</h1><br>";
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
        <br><br><br>
        Name:<input type='text' name='name' value='<?php echo $n ?>' /><br><br>
        mobile No:<input type='int' name='mobile' value='<?php echo $m ?>' /><br /><br>
        Address:<input type='text' name='address' value='<?php echo $a ?>' /><br /><br>
        Password:<input type='password' name='password' value='<?php echo $p ?>' id='pswd'/>
        <input type="checkbox" onclick="myFunction()">Show Password <br><br><br>
        <input type='submit' name='Submit' value='Submit' />
    </form>
<script>
function myFunction() {
  var x = document.getElementById("pswd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>
</body>

</html>
<?php
if (isset($_POST['Submit'])) {
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $pswd=$_POST['password'];



$insert=mysqli_query($con,"update student12 set name='$name',address='$address',mobile='$mobile',password='$pswd' where email='$email' ") or die("Error in update query");

header('Location:main.php');

mysqli_close($con);

}


?>