<?php

class Dog{
  public $name;
  public $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro(){
    echo "Hi, my name is {$this->name} and my color is {$this->color}.";
    echo "<br>";
  }

}






?>