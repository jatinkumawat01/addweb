<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form id="form1" name="form1" method="get">
        First value:<input type="text" name="fvalue" /><br/> 
        Second value:<input type="text" name="svalue" /><br/><br/>
        <input type="submit" name="Add" value="Add" />  
        <input type="submit" name="Subtract" value="Subtract" />  
        <input type="submit" name="Multiply" value="Multiply" />  
        <input type="submit" name="Divide" value="Divide" />
    </form>
</body>
</html>
<?php
if(isset($_GET['Add']))
{
    $a=$_GET['fvalue'];
    $b=$_GET['svalue'];
    echo "<a href=Calc.php?fvalue=$a&svalue=$b&Add=Add>Edit</a>";
}
else if(isset($_GET['Subtract']))
{
    $a=$_GET['fvalue'];
    $b=$_GET['svalue'];
    echo "<a href=Calc.php?fvalue=$a&svalue=$b&Subtract=Subtract>Edit</a>";
}
else if(isset($_GET['Multiply']))
{
    $a=$_GET['fvalue'];
    $b=$_GET['svalue'];
    echo "<a href=Calc.php?fvalue=$a&svalue=$b&Multiply=Multiply>Edit</a>";
}
else if(isset($_GET['Divide']))
{
    $a=$_GET['fvalue'];
    $b=$_GET['svalue'];
    echo "<a href=Calc.php?fvalue=$a&svalue=$b&Divide=Divide>Edit</a>";
}
?>