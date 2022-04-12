<?php
class ParentClass
	{
		function __construct()
		{
            echo "Parent class construct call";
		}
	}
class ChildClass extends Parentclass
	{
		function __construct()
		{
			parent::__construct();
		}
	}
$obj = new ChildClass();
?>
