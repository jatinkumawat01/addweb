<?php

$p=1000;
$r=30;
$t=4;
$i=$p*$r*$t/100;
$ci=$p*pow((1+$r/100),$t);
echo "interst =".$i."<br> compound interest = ".$ci;

?>