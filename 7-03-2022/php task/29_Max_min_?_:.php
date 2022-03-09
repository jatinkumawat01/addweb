<?php
$a=20;
$b=15;
$c=23;
$d=63;
$max = ($a>$b && $a>$c && $a>$d)?$a:($b>$c && $b>$d)?$b:($c>$d)?$c:$d;
$min = ($a<$b && $a<$c && $a<$d)?$a:($b<$c && $b<$d)?$b:($c<$d)?$c:$d;
echo "maximum = ".$max."<br>";
echo "minmum = ".$min;