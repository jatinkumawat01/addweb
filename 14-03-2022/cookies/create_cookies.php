<?php
//    setcookie("name", "John Watkin", time()+20, "/","", 0);
//    setcookie("age", "36", time()+20, "/", "",  0);

if(!isset($_COOKIE["name"])) {  
    echo "Sorry, cookie is not found!";  
} else {  
    echo "<br/>Cookie Value: " . $_COOKIE["name"];  
    echo "<br/>Cookie age: " . $_COOKIE["age"];  
}  

?>
