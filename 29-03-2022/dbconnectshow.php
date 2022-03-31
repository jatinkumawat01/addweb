<?php
$con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
$query=mysqli_query($con,"select * from student") or die("Error in query");
echo "<table border=2><tr><td>id</td><td>name</td><td>mobile</td><td>address</td><td>email</td><td>password</td></tr>";
while($row=mysqli_fetch_array($query))
{
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["address"]."</td>";
    echo "<td>".$row["mobile"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["password"]."</td>";

    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>