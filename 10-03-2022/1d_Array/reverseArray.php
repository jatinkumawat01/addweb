<?php
$arr1 = array(1, 3, 5, 7);
$n= sizeof($arr1);
$mid = (int)(sizeof($arr1)/2);
echo " Array befor reverse : ";
for ($i = 0; $i < $n; $i++)
	echo $arr1[$i] . " ";

echo "<br>";

for($i=0;$i<=$mid; $i++){
    $temp=$arr1[$i];
    $arr1[$i]=$arr1[$n-$i-1];
    $arr1[$n-$i-1]=$temp;

}
echo "Array after reverse : ";

for ($i = 0; $i < $n; $i++)
	echo $arr1[$i] . " ";

echo "<br>";


?>