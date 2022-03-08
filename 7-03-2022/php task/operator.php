<?php

$a=20;
$b=30;
echo "a=".$a."  b=".$b."<br><br>";

$opt = "+";

switch ($opt) {
  case "+":
    $c=$a+$b;
    echo 'a+b ='.$c;
    break;
  case "-":
    $c=$a-$b;
    echo 'a-b ='.$c;
    break;
  case "*":
    $c=$a*$b;
    echo 'a*b ='.$c;
  case "/":
    $c=$a/$b;
    echo 'a/b ='.$c;
    break;
  default:
    echo "not valid oerator";
}
?>