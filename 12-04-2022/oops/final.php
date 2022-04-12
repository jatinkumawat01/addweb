<?php
final class A{ // Final class can't be extended    
    function meth()
    {
    }
}
class B extends A{
function meth(){
}
}
//Fatal error
?>



<?php
class Base {
    final function printdata() {
    }
}
class Derived extends Base {
    function nonfinal() {
    }
} 
$obj = new Derived;
$obj->printdata();
$obj->nonfinal();
?>
