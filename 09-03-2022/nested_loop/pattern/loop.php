<?php
$num=$_GET["number"];
echo " number =".$num."<br>";


echo "1) Number pattern <br><br>";
for ($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "$j ";
    }
    echo "<br>";
}

echo "<br><br><br>";

echo "2) * pattern <br><br>";
for ($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "* ";
    }
    echo "<br>";
}

echo "<br><br><br>";


echo "3) Number pattern <br><br>";
$count=0;
for ($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        $count +=1;
        echo "$count ";
    }
    
    echo "<br>";
}

echo "<br><br><br>";

echo "4) Number pattern <br><br>";
for ($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "$i ";
    }
    echo "<br>";
}

echo "<br><br><br>";

?>