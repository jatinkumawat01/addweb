<?php
$a=$_GET["a"];
$b=$_GET["b"];

for($i=$a; $i<=$b;$i++)
{
    $num1=$i;
$j=0;
while($num1>0)
{
    $d=$num1%10;
    $j=$j+$d*$d*$d;;
    $num1=(int)($num1/10);
   

}
if($j==$i){
    echo "given number $i is Armstrong number <br>";
}
else
{
    echo "given number $i is not Armstrong number <br>";
}
}


?>


