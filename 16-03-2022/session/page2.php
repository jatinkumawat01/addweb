<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user']))
{
    header("Location:page1.php");
}
else{
    echo "User Value: " . $_SESSION["user"];  
    echo "<br><form method=post > <input type=submit name=logout value=Logout> </form>";
    if($_POST['logout']){
        session_destroy();
        header("Location:page1.php");
    }

}
?>

