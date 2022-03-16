<?php
error_reporting(0);
$a=$_REQUEST['fvalue'];
$b=$_REQUEST['svalue'];

if($_REQUEST['Add'])
{
$c=$a+$b;
echo "The total is ".$c;
}
else if($_REQUEST['Subtract'])
{
$c=$a-$b;
echo "The total is ".$c;
}
else if($_REQUEST['Multiply'])
{
$c=$a*$b;
echo "The total is ".$c;
}
else if($_REQUEST['Divide'])
{
$c=$a/$b;
echo "The total is ".$c;
}
?>