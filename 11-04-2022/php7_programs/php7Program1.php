<?php
declare(strict_types=1);
function returnsum(float $a, float $b)
 {
return $a + $b;
}


echo returnsum(3.1, 2.1)."\n";
// output float(5.2)

//echo returnsum(3, "2 days");
// Fatal error

?>