<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert data</title>
</head>

<body>
    <form name="myform" method="post" onsubmit="return validateform()">
        Name:<input type="text" name="name" /><br />
        Email:<input type="email" name="Email" /><br />
        password:<input type="password" name='password' /><br />
        mobile No:<input type="int" name='mobile' /><br />
        Address:<input type="text" name='address' /><br />
        <input type="submit" name="SignUp" value="SignUp" />
    </form>

    <script>
    function validateform() {
        var name = document.myform.name.value;
        var password = document.myform.password.value;

        if (name == null || name == "") {
            alert("Name can't be blank");
            return false;
        } else if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            return false;
        }
    }
    </script>
</body>

</html>
<?php
if (isset($_POST['SignUp'])) {
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['Email'];
    $pswd=$_POST['password'];

$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$insert=mysqli_query($con,"insert into student12 ( name, address, mobile, email, password) values('$name','$address', $mobile, '$email', '$pswd')") or die("Error in query");
if(!isset($_SESSION['email']))
{
    header("Location:main.php");
}
else{
    header('Location:login.php');
}
mysqli_close($con);

}


?>