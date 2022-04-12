<?php
echo "<br> Single Inheritance<br>";
class jatin{


    function hy(){
        echo 'hello my name is jatin kumawat<br> ';
    }
}
class jk extends jatin{
    function bye()
    {
        echo "bye jatin! good day<br>";
    }
}
$j=new jk();
$j->hy();
$j->bye();



?>


<?php

echo "<br> Multiple Inheritance<br>";
class dada{


    function hy(){
        echo 'hello dada ji<br> ';
    }
}
class papa extends dada{
    function bye()
    {
        echo "hello papaji <br>";
    }
}
class beta extends papa{
    function hi(){
        echo "hello betaji <br>";
    }
}
$b=new beta();
$b->hi();
$b->hy();
$b->bye();


?>


<?php

echo "<br> Hierarchical Inheritance<br>";
class Dad{


    function papa(){
        echo 'hello dad <br> ';
    }
}
class beti1 extends Dad{
    function bye()
    {
        echo "hello beti1 ji <br>";
    }
}
class beti extends Dad{
    function hi(){
        echo "hello beti ji <br>";
    }
}
$b1=new beti();
$b=new beti1();
$b1->hi();
$b1->papa();
$b->papa();
$b->bye();


?>