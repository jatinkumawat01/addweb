<?php
$i=$_GET["a"];
$b=$_GET["b"];
echo "starting = $i  ending = $b <br>";
$sum=0;
for($i;$i<=$b;$i++){
    if($i%7==0)
    {
        $sum +=1;
    }

}
echo "Total sum of all integers divisible by 7= $sum"
?>