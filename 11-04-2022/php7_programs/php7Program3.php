<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="username" id="username">
        <input type="submit" value="submit">
    </form>
</body>
</html>



<?php
if (isset($_GET['username'])){
   $username = $_GET['username'] ?? 'not passed';
   print($username);
   print("<br/>");


   // Equivalent code using ternary operator
   $username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
   print($username);
   print("<br/>");
   
   $username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
   print($username);
}
?>
