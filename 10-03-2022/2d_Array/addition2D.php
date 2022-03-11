<?php
$arr = array(
    array(1,2),
    array(3,4)
);
$arr1 = array(
    array(10,6),
    array(7,8)
);
$l = count($arr);
$l1 = count($arr1);
echo "addition<br>";
for($i=0;$i<$l;$i++)
{
    for($j=0;$j<$l;$j++)
    {
        $arr2[$i][$j]=$arr[$i][$j]+$arr1[$i][$j];
    }
}

for($i=0;$i<$l;$i++)
{
    for($j=0;$j<$l;$j++)
    {
        echo $arr2[$i][$j]." ";
    }
    echo "<br><br>";
}

echo "substraction<br>";
for($i=0;$i<$l;$i++)
{
    for($j=0;$j<$l;$j++)
    {
        $arr3[$i][$j]=$arr[$i][$j]-$arr1[$i][$j];
    }
}
for($i=0;$i<$l;$i++)
{
    for($j=0;$j<$l;$j++)
    {
        echo $arr3[$i][$j]." ";
    }
    echo "<br><br>";
}
?>