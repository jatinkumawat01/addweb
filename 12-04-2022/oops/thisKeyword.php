<?php
class Car {
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    public function hello()
    {
      return "Beep I am a <i>" . $this -> comp . "</i>, and I am <i>" .
        $this -> color;
    }
}
$c=new Car();
$C= $c->hello();
echo $C;
