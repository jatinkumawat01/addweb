<?php
error_reporting(0);
$email=$_REQUEST['email'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from student12 where email='$email' ") or die("Error select in query");
while($row=mysqli_fetch_array($query))
{
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite</title>
</head>
<body>
<div class="padding container d-flex justify-content-center">
    <div class="col-md-10 col-md-offset-1">
        <form class="signup-form" method='post'>
            <h3 class="text-center">Hello <?php echo $n ?> </h3><br>
            <h3 class="text-center">Your Email: <?php echo $e ?> </h3><br>
            <h2 class="text-center">Edit NOW</h2>
            <hr>
            <div class="form-group">Name:     <input type="text" class="form-control" name='Fname' value="<?php echo $n ?>" required="required"> </div>
            <div class="form-group">Address:  </Address> <input type="text" class="form-control" name='address' value="<?php echo $a ?>" required="required"> </div>
            <div class="form-group">Mobile:   <input type="int" class="form-control" name='mobile' value="<?php echo $m ?>" required="required"> </div>
            <div class="form-group">Password: <input type="password" class="form-control" id='pswd' name='password' value="<?php echo $p ?>" required="required"></div><input type="checkbox" onclick="myFunction()">Show Password  
            <div class="form-group text-center"> <button type="submit" class="btn btn-blue btn-block" name='submit' value='Register Now' formmethod="post">Register Now</button> </div>
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
</script>
<style>
    body {
    background-color: #060
}

.padding {
    padding: 5rem !important
}

.signup-form {
    background-color: #fff;
    padding: 45px;
    border-radius: 1px
}

h2,h3 {
    font-size: 26px;
    letter-spacing: 0.08em
}

.signup-form .form-control {
    font-size: 16px;
    padding: 10px 15px;
    color: #555;
    background-color: #fff;
    border-radius: 3px
}

.signup-form input {
    border: 1px solid #eee;
    height: 38px;
    box-shadow: none !important
}

.btn-blue {
    background: #44c5ee;
    padding: 10px 28px;
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
    $pswd=$_POST['password'];


    $con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$insert=mysqli_query($con,"update student12 set name='$name',address='$address',mobile='$mobile',password='$pswd' where email='$email' ") or die("Error in update query");
mysqli_close($con);
header("Location:admin.php");


}
?>