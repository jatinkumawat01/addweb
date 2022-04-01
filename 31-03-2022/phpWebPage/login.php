<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert data</title>
</head>

<body>
    <form name="myform" method="post" >
        Email:<input type="text" name='email' /><br />
        Password:<input type="password" name="password" id='pswd'/>
        <input type="checkbox" onclick="myFunction()">Show Password <br><br><br>
        <input type="submit" name="Login" value="Login" onclick="return validateform()"/>
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
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    
    
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select  email from student12 where email='$email' ") or die("Error in query");

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