<?php

include './class.php';
include './construct.php';
include 'inheritance.php';
include 'constants.php';
include 'abstract.php';
include 'interfaces.php';
include 'traits.php';
include 'staticMethods.php';
include 'staticProperties.php';

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
    $this->intro();
  }
}

$coco = new Coco("Coco", "white");
$coco->message();

// Override inherited method
class Elsi extends Dog{

  public $weight;

  public function __construct($name, $color, $weight)
  {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }

  public function intro(){
    echo "My name is {$this->name}, color {$this->color} and weighing around {$this->weight}kg.";
  }
}

// Create object of Elsi class inherited from Dog class
$elsi = new Elsi("Elsi", "brown", 24);
$elsi->intro();
// Override inherited method

// ------- inheritance ------- //

// ------- --------------------------------- ------- //

// CONSTANT MESSAGE
echo "<br>";
echo constantMessage::MESSAGE;
// CONSTANT MESSAGE

// ------- --------------------------------- ------- //

// ------- --------------------------------- ------- //

// ABSTRACT CLASSES
class Place extends Luzon{
  public function intro() : string{
    return "From Luzon representative, $this->region!";
  }
}

// Set an object here
$place = new place("NCR");
$place->intro();
echo "<br>";

// ABSTRACT CLASSES

// ------- --------------------------------- ------- //

// ------- --------------------------------- ------- //

// INTERFACES OOP

// Class definitions
class Aso implements Animal{
  public function makeSound()
  {
    echo "Worp worp!";
  }
}

class Cat implements Animal{
  public function makeSound()
  {
    echo "Meow meow!";
  }
}
// INTERFACES OOP

// List of objects (new classes)
$dog = new Aso();
$cat = new Cat();
$animals = array($dog, $cat);

// Loop through animals using foreach loop
foreach($animals as $animal){
  $animal->makeSound();
  echo "<br>";
}

// ------- --------------------------------- ------- //

// ------- --------------------------------- ------- //

// TRAITS
class Welcome{
  use Message1;
}

class Welcome2{
  use Message1, Message2;
}

$message_object = new Welcome();
$message_object->msg1();

$message2_object = new Welcome2();
$message2_object->msg1();
$message2_object->msg2();

// TRAITS

// ------- --------------------------------- ------- //

// ------- --------------------------------- ------- //

// Static methods
Math::addition();
// Static methods

// More on static methods
new Sipnayan();
$math = new Mathematics();
echo $math->example_addition();
// More on static methods

// ------- --------------------------------- ------- //

// ------- --------------------------------- ------- //

// Static properties
echo pi::$value;
echo "<br>";
// Static properties

// More on static properties
$pi = new pi();
echo $pi->piValue();
// More on static properties

// ------- --------------------------------- ------- //

// ------- --------------------------------- ------- //

// Iteratble OOP

// Iteratble OOP

// ------- --------------------------------- ------- //

?>