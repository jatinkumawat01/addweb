<?php
$mat = array (
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,0,1,2),
    array(3,4,5,6)
  );
$len=sizeof($mat);
for($i=0;$i<$len;$i++)
{
    for($j=0;$j<$len;$j++){
        echo $mat[$i][$j]." ";
    }
    echo "<br>";
}

echo "lower triangle <br>";
for($i=0;$i<$len;$i++)
{
    for($j=0;$j<$len;$j++){
        if ($i<$j){
            $mat[$i][$j]=0;
        }
        
    }
}
for($i=0;$i<$len;$i++)
{
    for($j=0;$j<$len;$j++){
        echo $mat[$i][$j]." ";
    }
    echo "<br>";
}

$mat = array (
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,0,1,2),
    array(3,4,5,6)
  );

echo "upper triangle <br>";
for($i=0;$i<$len;$i++)
{
    for($j=0;$j<$len;$j++){
        if ($i>$j){
            $mat[$i][$j]=0;
        }
        
    }
}
for($i=0;$i<$len;$i++)
{
    for($j=0;$j<$len;$j++){
        echo $mat[$i][$j]." ";
    }
    echo "<br>";
}
?>
