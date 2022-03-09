<?php
$a=$_GET["a"];
$b=$_GET["b"];
echo "a = $a  b= $b <br>";
$c=1;
for($i=1;$i<=$b;$i++){
    $c= $c*$a;
}
echo "value of $a^$b = $c "
?>