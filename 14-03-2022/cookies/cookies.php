<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check cookies</title>
</head>
<body>
<form method="post" >
Username: <input name="username" type="text">
Password: <input name="password" type="password"><br/>
<input type="checkbox" name="remember" id="remember" value="Remember">Remember Me </input><br/>
<input type="submit" value="Login">
</form>

</body>
</html>
<?php
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}


?>
