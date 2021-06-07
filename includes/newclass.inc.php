<?php

// A class is a template for objects
class NewClass {
  // It contains properties and methods
  // Properties are similar to variables
  // Methods are similar to functions
  public $info = 'This is an info';

}

// Instance of a class
$object = new NewClass;

// Get all the info about the object [and the class itself]
var_dump($object);