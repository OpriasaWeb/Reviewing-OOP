<?php

include './class.php';
include './construct.php';
include 'inheritance.php';

// ------- class.class.php ------- //

// This is called object
$apple = new Fruit;

// Passing the string to the setname function parameter from class.php
$apple->set_name("McApple");

// By calling the get name which is returning the variable set up by set_name
echo $apple->get_name();
echo "<br>";
// ------- class.class.php ------- //

// ------- --------------------------------- ------- //

// ------- construct.class.php ------- //
$audi = new Car('Audi');
// ------- construct.class.php ------- //

// ------- --------------------------------- ------- //

// ------- inheritance ------- //
class Coco extends Dog{
  public function message(){
    echo "What is your name? ";
    
  }
}

$coco = new Coco("Coco", "white");
$coco->message();
$coco->intro();
// ------- inheritance ------- //

// ------- --------------------------------- ------- //

?>