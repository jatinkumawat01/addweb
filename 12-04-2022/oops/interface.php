<?php 

interface MyInterfaceName {
public function methodA();
public function methodB();
}
?>



<?php
Interface MyInterface1 {
	public function myMethod1();
}
Interface MyInterface2 {
	public function myMethod2();
}
class MyClass implements MyInterface1, MyInterface2 {
	public function myMethod1() {
	}
	public function myMethod2() {
	}
}
//$inf=new MyInterface1();
$obj = new MyClass();
$obj -> myMethod1();
$obj -> myMethod2();
?>
