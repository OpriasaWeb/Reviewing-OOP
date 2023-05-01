<?php

class Car{
  public $brand;

  // Constructor
  function __construct($brand)
  {
    $this->brand = $brand;
  }

  // Desctructor
  function __destruct()
  {
    echo "<br>";
    echo "Your car brand is {$this->brand}.";
  }

  function get_name(){
    return $this->brand;
  }

}






?>