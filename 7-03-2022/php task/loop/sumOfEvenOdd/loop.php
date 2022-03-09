<?php
$i=$_GET["a"];
$b=$_GET["b"];
echo "starting = $i  ending = $b <br>";
$even=0;
$odd=0;
for($i;$i<=$b;$i++){
    if($i%2==0)
    {
        $even +=1;
    }
    else{
        $odd +=1;
    }
}
echo "Total even = $even <br> Total odd = $odd"
?>