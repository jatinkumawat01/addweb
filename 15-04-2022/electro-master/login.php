<?php ob_start();
error_reporting(0);
session_start();
session_destroy();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Loding font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!-- Custom Styles -->
    

    <title>Login</title>
  </head>
  <body>

    <!-- Backgrounds -->

    <div id="login-bg" class="container-fluid">

      <div class="bg-img"></div>
      <div class="bg-color"></div>
    </div>

    <!-- End Backgrounds -->

    <div class="container" id="login">
        <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="login">

            <h1>Login</h1>
            
            <!-- Loging form -->
                  <form method='post'>
                    <div class="form-group">
                      <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" >
                      
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                      <div class="form-check">

                      <label class="switch">
                      <input type="checkbox">
                      <span class="slider round"></span>
                    </label>
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
                      
                      <label class="forgot-password"><a href="signup.php">Signup<a></label>

                    </div>
                  
                    <br>
                    <input type="submit" class="btn btn-lg btn-block btn-success" name='signin' value='Sign in'>
                  </form>
             <!-- End Loging form -->

          </div>
        </div>
        </div>
    </div>


  </body>
<style>
    body {
	font-family: 'Montserrat', sans-serif;
	text-rendering : optimizeLegibility;
	-webkit-font-smoothing : antialiased;
}


#login-bg.container-fluid {
	padding: 0;
	height: 100%;
	position: absolute;
}

/* Background image an color divs*/

.bg-img , .bg-color {
	min-width: 50%;
	vertical-align: top;
	padding: 0;
	margin-left: 0;
	height: 100%;
	background-color: #CAF0D3;
	display: inline-block;
	overflow: hidden;
}

.bg-color {
	margin-left: -5px;
}

.bg-img {
	background-image: url(./bg-image.jpeg);
	background-size: cover;
}

#login{
	padding-top: 10%;
	text-align: center;
	text-transform: uppercase;
}


.login {
	width: 100%;
	height: 500px;
	background-color: #fff;
	padding: 15px;
	padding-top: 30px;
}

.login h1 {
	margin-top: 30px;
	font-weight: bold;
	font-size: 60px;
	letter-spacing: 3px;
}

.login form {
	max-width: 420px;
	margin: 30px auto;
}

.login .btn {
	border-radius: 50px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 2px;
	font-size: 20px;
	padding: 14px;
	background-color: #00B72E;
}

.form-group input {
	font-size: 20px;
	font-weight: lighter;
	border: none;
	background-color: #F0F0F0;
	color: #465347!important;
	padding: 26px 30px;
	border-radius: 50px;
	transition : 0.2s;
}




/* Form check styles*/

.form-check {
	padding: 0;
	text-align: left;
}

.form-check label {
	vertical-align: top;
	padding-top: 5px;
	padding-left: 5px;
	font-size: 15px;
	color: #606060;
	font-size: 14px;
}

.forgot-password {
	text-align: right;
	float: right;
	font-weight: bold;
}

.forgot-password a {
	color: #00B72E;
	opacity: 0.6;
}

.forgot-password a:hover {
	opacity: 1;
}


/* Switch styles */

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 30px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #F0F0F0;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 30px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 22px;
  width: 22px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #00B72E;
}

input:focus + .slider {
  box-shadow: 0 0 1px ##00B72E;
}

input:checked + .slider:before {
  -webkit-transform: translateX(30px);
  -ms-transform: translateX(30px);
  transform: translateX(30px);
}



/* Media queries */

@media(max-width: 500px) {
	.bg-img , .bg-color {
	min-width: 100%;
	height: 50%;
	margin: 0;
	}

	.forgot-password {
	text-align: right;
	float: left;
	padding: 20px 0;
	}


	#login {
		padding-top: 50px;
	}

}

</style>
</html>
<?php
error_reporting(0);
if ($_POST['signin']=='Sign in') {
    $email = $_POST['email'];
    $pswd = $_POST['password'];
    echo $email;
    
    
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$sql="select  email from Customer where email='$email'and isActive=1 and password=$pswd ";
$query=mysqli_query($con,$sql) or die("Error in select query");

$rows=mysqli_num_rows($query);

if($rows>0){
    echo "Login Successful";
    
	
    session_start();
    $_SESSION["email"]=$email;
    header('Location:index12.php');

}
else{
    echo "<script>alert('Incorrect Username or password');</script>";
}
}

?>