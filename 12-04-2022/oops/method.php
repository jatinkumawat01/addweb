<?php  
function sayHello($name="Ashok"){  
    echo "my name is $name.<br>";
}  
sayHello("Amit");  
sayHello();//passing no value  
sayHello("Atul");  
?> 

<?php  
function sayHello1($first="Ashok",$last="Kumar"){  
    echo "my name is $first $last.<br>";
}  
sayHello1();  
sayHello1("Atul");  
sayHello1("Ashok","Sharma");  
?> 

<?php
echo "function return value <br>";
function addFunction($num1, $num2) {
$sum = $num1 + $num2;
return $sum;
}
$return_value = addFunction(10, 20);
echo $return_value ."<br>";
         
      ?>

