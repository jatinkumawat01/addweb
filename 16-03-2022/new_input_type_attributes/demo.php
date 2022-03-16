<?php 
error_reporting(0);

if($_COOKIE['sum']==NULL)
{
    $cookies=1;
    setcookie ("sum",$cookies,time()+ 86400 *2);
}
else{
    $cookies=$_COOKIE['sum']+1;
    setcookie ("sum",$cookies,time()+ 86400 *2);
    
    
}
echo "<br/>Cookie Value: " .$cookies;
?>