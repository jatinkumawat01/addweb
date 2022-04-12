<?php
   class A {
      private $x = 1;
   }


   // Define a closure Pre PHP 7 code
   $getValue = function() {
      return $this->x;
   };


   // Bind a clousure
   $value = $getValue->bindTo(new A, 'A'); 


   print($value());
?>
