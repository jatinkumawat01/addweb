<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert data</title>
</head>

<body>
    <form name="myform" method="post"  >
        Name:<input type="text" name="name" required/><br />
        Email:<input type="email" name="Email" /><br />
        password:<input type="password" name='password' id='pswd' />
        <input type="checkbox" onclick="myFunction()">Show Password <br>
        Repeat password:<input type="text" name='Rpassword' id='rpswd'/><br />
        mobile No:<input type="int" name='mobile' id='mobile'/><br />
        Address:<input type="text" name='address' required/><br />
        <input type="submit" name="SignUp" value="SignUp"  onclick="return validateform()"/>
    </form>

    <script>
        
        function validateform() {
        var email = document.myform.Email.value;
        var password = document.myform.password.value;
        var rpassword = document.myform.Rpassword.value;
        var mobile = document.myform.mobile.value;

        // var phoneno = /^((\\+91-?)|0)?[0-9]{10}$/;
        // var checkEmail= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (email == null || email == "") {
            alert("Email can't be blank");
            return false;
        } else if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            return false;
        }
        else if(password != rpassword)
        {
            alert("Password and repeat password not match.");
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
    <style>
    body {
        background: url('http://cdn.wallpapersafari.com/13/6/Mpsg2b.jpg');
        margin: 0px;
        font-family: 'Ubuntu', sans-serif;
        background-size: 100% 110%;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    a {
        margin: 0;
        padding: 0;
    }
    </style>
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