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
for($i=0;$i<$l;$i++)
{
    
    for($j=0;$j<$l;$j++)
    {
        $arr2[i][j]=0;
        for($k=0;$k<$l;$k++){
            $arr2[$i][$j]=$arr[$i][$k]*$arr1[$k][$j];
        }
    }
}
for($i=0;$i<$l;$i++)
{
    
    for($j=0;$j<$l;$j++)
    {
        echo arr2[i][j]." ";
    }
    echo "<br>";
}
?>