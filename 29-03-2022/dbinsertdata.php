<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert data</title>
</head>

<body>
    <form method="post">
        Id:<input type="text" name="id" /><br />
        Name:<input type="text" name="name" /><br />
        Address:<input type="text" name="address" /><br />
        Mobile:<input type="text" name="mobile" /><br />
        <input type="submit" name="Insert" value="Insert Data" />
    </form>
</body>
</html>

<?php
if (isset($_POST['Insert'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $con = mysqli_connect("localhost", "root", "", "batch6") or die("Error in Connection");
    $query = mysqli_query($con, "Insert into student values($id,'$name','$address',$mobile)") or die("Error in Query");
    if ($query) {
        echo "<script>alert('Data Inserted');</script>";
    } else {
        echo "<script>alert('Error in Inserting');</script>";
    }

    mysqli_close($con);
}
?>