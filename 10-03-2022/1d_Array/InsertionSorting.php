<?php

 function insertion_Sort($arr)
{
	for($i=0;$i<count($arr);$i++){
		$temp = $arr[$i];
		$j = $i-1;
		while($j>=0 && $arr[$j] > $temp){
			$arr[$j+1] = $arr[$j];
			$j--;
		}
		$arr[$j+1] = $temp;
	}
return $arr;
}
$arr1 = array(3, 0, 2, 5, -1, 4, 1);
echo " Array :";

for($i=0; $i<sizeof($arr1); $i++)
{
    echo "$arr1[$i], ";
}
echo "<br>";
echo "<br> Sorted Array : ";
$arr=insertion_Sort($arr1);
for($i=0; $i<sizeof($arr); $i++)
{
    echo "$arr[$i], ";
}
echo "<br>";
?>
