<?php
$num=$_GET["number"];
echo "number =".$num."<br>";
function decToBinary($n)
{
    $binaryNum;
    $i = 0;
    echo "binary number is ";
    while ($n > 0)
    {
        $binaryNum[$i] = $n % 2;
        $n = (int)($n / 2);
        $i++;
    }
    for ($j = $i - 1; $j >= 0; $j--)
        echo $binaryNum[$j];
}
decToBinary($num);
?>