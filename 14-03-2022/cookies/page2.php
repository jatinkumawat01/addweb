<?php
error_log(0);
if(!isset($_COOKIE['username']))
{
    header("Location:page1.php");
}
else{
    echo "<br/>Cookie Value: " . $_COOKIE["username"];  
    echo "<br/>Cookie age: " . $_COOKIE["password"];
    echo "<br><form method=post > <input type=submit name=logout value=Logout> </form>";
    if(isset($_POST['logout'])){
        setcookie( "username", "", time()- 3600);
        setcookie( "password", "", time()- 3600);

        header("Location:page1.php");
    }

}
?>

