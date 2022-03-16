<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check session</title>
</head>
<body>
<form method="post" >
Username: <input name="username" type="text">
Password: <input name="password" type="password"><br/>
<input type="submit" name="login" value="Login">
</form>
</body>
</html>
<?php
if(isset($_POST['login'])){
    $a=$_POST['username'];
	$b=$_POST['password'];
    session_start();
    $_SESSION["user"]=$a;
    header('Location:page2.php');
}
?>

