<?php
class greeting {
  public static function ADD()
  {
    $a=30;
    $b=20;
    $c=$a+$b;
    echo "Addition = ".$c;
  }
}


greeting::ADD();
?>