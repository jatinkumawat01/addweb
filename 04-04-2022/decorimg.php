<?php
$con=mysqli_connect("localhost","root","","batch6");
$sql = "Select * from decor";

$query =mysqli_query($con, $sql);
echo "<table border=3><tr><td>image</td><td>Edit</td><td>Delete</td> <tr>";
while($row=mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td><img src=".$row['img_path']." height=200 width=300 /></td>";
echo "<td><a href=decorEdit.php?Id=".$row['ImgId'].">Edit </a></td>";
echo "<td><a href=decorDelete.php?Id=".$row['ImgId'].">Delete</a></td>";

echo "</tr>";
} 
echo "</table>";