<?php
$num=2034;
echo "4 digit number =".$num."<br>";
$num1=$num;
$i=0;
while($num1>0)
{
    $d=$num1%10;
    $i=$i*10+$d;
    $num1=(int)($num1/10);
   

}
echo "reverse number= ".$i."<br>";

?>