<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['email']))
{
    header("Location:login.php");
}
else{
    $email=$_SESSION['email'];
  
    $con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
    $query=mysqli_query($con,"select name from student12 where email='$email'") or die("Error in query");

    $rows=mysqli_num_rows($query);
    while($row=mysqli_fetch_array($query))
        { 
            $n=$row['name'];}
        }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="logo"> <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTt2W5LxdR06KeKzv-iG96OS_FanT7opw3Y6w&usqp=CAU" alt="">
        </div>
        <div class="text-center mt-4 name">Wellcome to Admin Panel </div>
        <div class="text-center mt-4 name1">
        <h3 class="text-center">Hello <?php echo $n ?> </h3><br>       
    </div>
        <table class="p-3 mt-3" >
            <tr>
                <td>Name</td>
                <td>Mobile</td>
                <td>Address</td>
                <td>Email</td>
                <td>Password</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            <?php
        error_reporting(0);
        $con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
        $query=mysqli_query($con,"select * from student12") or die("Error in query");
    
    while($row=mysqli_fetch_array($query))
    {
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["mobile"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "<td><a href=edit.php?email=".$row['email'].">Edit</a></td>";
        echo "<td><a href=delete.php?email=".$row['email'].">delete</a></td>";

        echo "</tr>";

    }
    mysqli_close($con);

        
        
        
        ?>
        </table>
        <form class="p-3 mt-3" method='post'>
        <button class="btn1 mt-3 " name ='Add' value='Add' formmethod="post">Add</button><?php  if($_POST['Add']=='Add'){header("Location:register.php");}?>
        <button class="btn mt-3 " name='logout'  value='Logout' formmethod="post">Logout</button><?php if($_POST['logout']=='Logout' ){ session_destroy();header("Location:login.php");}?>
        </form>

    </div>
</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

body {
    background: #ecf0f3
}

.wrapper {
    max-width: 1200px;
    min-height: 1000px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff
}

.logo {
    width: 80px;
    margin: auto
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
}


.wrapper .name {
    font-weight: 700;
    font-size: 3.4rem;
    letter-spacing: 0.3px;
    padding-left: 252px;
    color: #267cc7;
}
.wrapper .name1 {
    font-weight: 600;
    font-size: 2.4rem;
    letter-spacing: 0.3px;
    padding-left: 12px;
    color: #26c7c0;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
}

.wrapper .form-field .fas {
    color: #555
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
    letter-spacing: 1.3px
}

.wrapper .btn:hover {
    background-color: #039BE5
}

.wrapper .btn1 {
    box-shadow: none;
    width: 10%;
    height: 40px;
    background-color: #03A913;
    color: #fff;
    border-radius: 29px;
    box-shadow: 15px 4px 3px #b1b1b1, -3px -3px 3px #fff;
    letter-spacing: 0.3px;
}
}

.wrapper .btn1:hover {
    background-color: #039BE5
}
.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4
}

.wrapper a:hover {
    color: #039BE5
}
table, tr, td {
    border: 3px solid black;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px
    }
}
</style>

</html>



