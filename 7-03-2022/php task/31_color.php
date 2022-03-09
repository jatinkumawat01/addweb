<?php
function color($x){
     if ($x=="g" or $x=="G"){
         echo "Green color";
        }
     elseif ($x=="w" or $x=="W"){
         echo "White color";
        }
     else {
         echo "Not a valid color" ;
        }
     }
$x="w";
color($x)

?>