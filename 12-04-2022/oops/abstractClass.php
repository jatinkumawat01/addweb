<?php
abstract class Base {
    abstract function printdata();
}
class Derived extends base {
    function printdata() {
    }
}
$b1 = new Derived;
$b1->printdata();
?>
