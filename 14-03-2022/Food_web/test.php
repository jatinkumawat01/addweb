<?php
function Signup(){
    setcookie("text",$_COOKIE["text"],time()+3600 , "/","",0);
    setcookie("text",$_COOKIE["password"],time()+3600 , "/","",0);
    if(!isset($_COOKIE["text"]) ) {  
        header("login.txt");  
    } else {  
        echo "<br/>Cookie name: " . $_COOKIE["text"];  
        echo "<br/>Cookie password: " . $_COOKIE["password"];  
    }  
}
?>