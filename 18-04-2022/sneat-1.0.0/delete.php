<?php
error_reporting(0);
$email=$_REQUEST['email'];
$tname=$_REQUEST['tname'];
$Tname=$_REQUEST['Tname'];
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
if(isset($id)){
    $sql="update $tname set isActive=0 where ImgId=$id ";
    echo $sql;
    $delete=mysqli_query($con,$sql) or die("Error in query");
    header("Location:Pview.php?tname=$tname");

}
else{
    $sql="update $Tname set isActive=0 where  email='$email'";
    echo $sql;
    $delete=mysqli_query($con,$sql) or die("Error in query");
    header("Location:client_table.php?tname=$tname");
}




mysqli_close($con);



?>