<?php

class Fruit{
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name){
    // Setting the name variable to the setname function parameter
    $this->name = $name;
  }

  function get_name(){
    // Get name to return the name variable containing the name parameter that was pass in
    return $this->name;
  }

}


?>