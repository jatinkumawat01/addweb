<?php
$s=1229;
$hr=(int)($s/3600);
$s=$s%3600;
$min=(int)($s/60);
$s=$s%60;
echo "hr =".$hr."<br> min=".$min."<br> sec= ".$s;
?>