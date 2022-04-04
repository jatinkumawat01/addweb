<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<div class="padding container d-flex justify-content-center">
    <div class="col-md-10 col-md-offset-1">
        <form class="signup-form" name="myform" method='post'>
            <h2 class="text-center">SIGNUP NOW</h2>
            <hr>
            <div class="form-group"> <input type="text" class="form-control" name='Fname' placeholder="Full Name" required="required"> </div>
            <div class="form-group"> <input type="email" class="form-control" name='Email' placeholder="Email Address" required="required"> </div>
            <div class="form-group"> <input type="text" class="form-control" name='address' placeholder="Address" required="required"> </div>
            <div class="form-group"> <input type="int" class="form-control" name='mobile' placeholder="Mobile Number" required="required"> </div>
            <div class="form-group"> <input type="password" class="form-control" id='pswd' name='password' placeholder="Password" required="required"></div><input type="checkbox" onclick="myFunction()">Show Password   
            <div class="form-group"> <input type="text" class="form-control" name='Rpassword' placeholder="Confirm Password" required="required"> </div>
            
            <div class="form-group text-center"> <button type="submit" class="btn btn-blue btn-block" name='submit' value='Register Now' formmethod="post" onclick="return validateform()" >Register Now</button> </div>
        </form>
    </div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("pswd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function validateform() {
        var email = document.myform.Email.value;
        var password = document.myform.password.value;
        var rpassword = document.myform.Rpassword.value;
        var mobile = document.myform.mobile.value;

        var phoneno = ^(\+91[\-\s]?)?[0]?(91)?[6789]\d{9}$;
        
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
        if(mobile.matches(phoneno)){
              //  "VALID MOBILE NUMBER"
        }else{
            alert("please enter valid number.");
        }
        
        

    }
</script>
<style>
    body {
    background-color: #060
}

.padding {
    padding: 48rem !important
}

.signup-form {
    background-color: #fff;
    margin: -32px;
    padding: 125px;
    border-radius: 101px;
}
}

h2 {
    font-size: 36px;
    letter-spacing: 0.08em
}

.signup-form .form-control {
    font-size: 21px;
    padding: 9px 22px;
    color: #a77272;
    background-color: #fff;
    border-radius: 25px;
}

.signup-form input {
    border: 1px solid #eee;
    height: 38px;
    box-shadow: none !important
}

.btn-blue {
    background: #44c5ee;
    padding: 10px 28px;
    margin: 45px;
    border: 2px solid #44c5ee;
    color: #fff;
    border-radius: 50px;
    font-weight: 700;
    letter-spacing: 0.08em;
    -webkit-transition: 0.5s all;
    transition: 0.5s all;
    box-shadow: 0px 0px 60px 0px rgba(68, 197, 238, 0.6);
    outline: none !important
}

.btn-blue:hover,
.btn-blue:focus,
.btn-blue:active {
    background: #fff;
    color: #496174
}
</style>
</body>
</html>

<?php 
error_reporting(0);
if($_POST['submit']=='Register Now'){
    $name=$_POST['Fname'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['Email'];
    $pswd=$_POST['password'];

$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$insert=mysqli_query($con,"insert into student12 ( name, address, mobile, email, password) values('$name','$address', $mobile, '$email', '$pswd')") or die("Error in insert query");
mysqli_close($con);
header("Location:dasbord.php");


}
?>