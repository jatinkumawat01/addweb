<?php
error_reporting(0);
$email=$_REQUEST['email'];
$tname=$_REQUEST['tname'];
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
if(isset($id)){
    $sql="delete from $tname  where ImgId=$id ";

}
else{
    $sql="delete from $tname  where  email='$email' ";
}
$delete=mysqli_query($con,$sql) or die("Error in query");

header('Location:Pview.php');

mysqli_close($con);



?>