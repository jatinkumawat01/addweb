<?php
function returnsum(float $x, float $y) 
{
return $x + $y;
}
$p=returnsum(6, "8 days");
echo $p;
echo "<br>";
//output float(14)
$q=returnsum(4.1, "4.2");
echo $q;
//output float(8.3)

?>
