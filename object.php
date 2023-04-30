<?php

include './class.php';

// This is called object
$apple = new Fruit;

// Passing the string to the setname function parameter from class.php
$apple->set_name("McApple");

// By calling the get name which is returning the variable set up by set_name
$apple->get_name;

?>