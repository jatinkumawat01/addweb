<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['email']))
{
    header("Location:login.php");
}
else{
    $email=$_SESSION['email'];
    $password=$_SESSION['password'];
    $con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
    $query=mysqli_query($con,"select name from student12 where email='$email'") or die("Error in query");

    $rows=mysqli_num_rows($query);
    while($row=mysqli_fetch_array($query))
        { 
            echo '<h1>Hello  '.$row['name']."</h1><br>";}
    echo "<br><br><br><form method=post > <input type=submit name=logout value=Logout> </form><br><br>";
    
    if($_POST['logout']){
        session_destroy();
        header("Location:login.php");
    }
        
    $query=mysqli_query($con,"select * from student12") or die("Error in query");
    echo "<script>$(document).ready(function () { $('#dt-cell-sellection').dataTable({select: {style: 'os',items: 'cell'}});});</script>";
    echo "<table id='dt-cell-sellection' class='table' cellspacing='0' width='100%'><thead><tr><th>name</th><th>mobile</th><th>address</th><th>email</th><th>password</th><th>edit</th><th>delete</th></tr></thead><tbody>";

    while($row=mysqli_fetch_array($query))
    {
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["mobile"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "<td><a href=edit.php?name="."&email=".$row['email'].">Edit</a></td>";
        echo "<td><a href=delete.php?name="."&email=".$row['email'].">delete</a></td>";

        echo "</tr>";
        $sum+=1;

    }
    echo "</tbody></table>";
    mysqli_close($con);
}
echo "<form method='post'><input type='submit' name ='Add' value='Add'/></form>";
if($_POST['Add']){
    header("Location:register.php");
}


?>