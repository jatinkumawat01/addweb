<?php
class Animal {
  public static function makeSound(){
      echo "hello jatin make my sound.";
  }
  
  public static function vocalize() {
    echo self::makeSound(); 
  }
}
Animal::vocalize();
