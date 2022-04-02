<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert data</title>
</head>

<body>
    <form name="myform" method="post" onsubmit="return validateform()">
        Email:<input type="text" name='email' /><br />
        Password:<input type="password" name="password" /><br />
        <input type="submit" name="Login" value="Login" />
        <input type='submit' name=SignUp value='SignUp' />
    </form>
    <script>
    function validateform() {
        var email = document.myform.email.value;
        var password = document.myform.password.value;

        if (email == null || email == "") {
            alert("Email can't be blank");
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
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    
    
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select  email from student12 where email='$email'") or die("Error in query");

$rows=mysqli_num_rows($query);

if($rows>0){
    echo "Login Successful";
    $a=$_POST['email'];
	
    session_start();
    $_SESSION["email"]=$a;
    header('Location:main.php');

}
else{
    echo "Incorrect Username or password";
}

mysqli_close($con);
}
if (isset($_POST['SignUp'])) {
    
    header('Location:register.php');
}
?>