<?php

class Math{
  public static function addition(){
    echo "Hello addition!";
    echo "<br>";
  }
} 

class Sipnayan{
  public static function addition(){
    echo "Hello sipnayan!";
    echo "<br>";
  }

  public function __construct()
  {
    self::addition();
  }
} 

class Mathematics{
  public function example_addition(){
    Math::addition();
  }
}





?>