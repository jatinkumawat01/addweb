<?php
$a=$_GET["a"];
$b=$_GET["b"];
echo "Number a = $a  Number = $b <br>";

for($i=1;$i<= $a && $i<=$b;$i++){
    if($a%$i==0 and $b%$i==0)
    {
        $GCD=$i;
    }

}
echo "GCD = $GCD";
?>