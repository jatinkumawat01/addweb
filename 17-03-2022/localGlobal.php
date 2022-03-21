<?php


function myTest() {
    $y=39; // local
  echo "<p>Variable x inside function is: $x</p>";
  echo "<p>Variable y inside function is: $y</p>";
}
$x = 5;  //global
myTest();

echo "<p>Variable x outside function is: $x</p>";
echo "<br>";
echo "<p>Variable x outside function is: $y</p>";
echo "<br>";

// ------------------------
$j = 5;
$k = 10;

function test() {
  global $j, $k;
  $k = $j + $k;
}

test();
echo $k; // outputs 15
echo "<br>";


// ========================
$d = 5;
$jk = 10;

function test1() {
  $GLOBALS['jk'] = $GLOBALS['d'] + $GLOBALS['jk'];
}

test1();
echo "<br>";
echo $jk; // outputs 15
echo "<br>";


// static Keyword
function test2() {
    static $var = 0;
    echo $var;
    $var++;
  }
  
  test2();
  echo "<br>";
  test2();
  echo "<br>";
  test2();

?>
