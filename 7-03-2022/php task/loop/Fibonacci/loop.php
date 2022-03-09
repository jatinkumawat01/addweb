<?php
$num=$_GET["number"];
echo "number =".$num."<br>";
function fib($n)
{
    $f1 = 0;
    $f2 = 1;
    $i;
 
    if ($n < 1)
        return;
    echo($f1);
    echo(" ");
    for ($i = 1; $i < $n; $i++)
    {
        echo($f2);
        echo(" ");
        $next = $f1 + $f2;
        $f1 = $f2;
        $f2 = $next;
    }
}
echo fib($num);
?>