<?php
$s=2;
$a=4;
$b=5;
$c=3;
$area;
 
    
    $s = ($a + $b + $c) / 2;
    $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
    echo "Area of a triangle = ".$area;