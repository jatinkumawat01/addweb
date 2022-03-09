<?php
$num=1234;
echo " 4 digit number =".$num."<br>";
$num1=$num;

$count=0;
while($num1>0)
{
    $d=$num1%10;
    $count= $count+$d;
 
    $num1=(int)($num1/10);
   

}
echo "sum of all digits $count <br> ";

?>