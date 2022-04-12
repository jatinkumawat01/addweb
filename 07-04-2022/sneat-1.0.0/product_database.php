<?php
ob_start();
error_reporting(0);
session_start();  

$email=$_REQUEST['tname'];
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from $tname where ImgId=$id") or die("Error in query");
while($row=mysqli_fetch_array($query))
        { 
            $id=$row['ImgId'];
            $filepath=$row["img_path"];
            $brand =$row["brand"];
            $size=$row["size"];
            $color=$row["color"];
            $name=$row["name"];
            $detail=$row["detail"];
            $price=$row["price"];
        } 
?>