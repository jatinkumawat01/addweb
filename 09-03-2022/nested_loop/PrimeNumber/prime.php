<?php
$a=$_GET["a"];
$b=$_GET["b"];

for($i=$a; $i<=$b;$i++)
{
    $flage=1;
    if ($i==1)
    {
        $flage=0;
    }
    else{
    for($j=2;$j<= $i/2;$j++){
        if ($i% $j==0){
            $flage=0;     
        }
    }
}
if ($flage==1){
    echo "$i is prime <br>";
}
else{
    echo "$i is not prime <br>";
}
}


?>


