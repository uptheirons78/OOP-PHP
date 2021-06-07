<?php

// A class is a template for objects
class NewClass {
  // It contains properties and methods
  // Properties are similar to variables [not the same thing]
  // Methods are similar to functions [not the same thing]

  // Visibility
  // public: it is possible to access data both inside and outside the class
  // private it is possible to access data only inside the class
  // protected it is possible to access data from inside the class and any class that extends it
  public $info = 'This is an info';


}

// Instance of a class
$object = new NewClass;

// Get all the info about the object [and the class itself]
var_dump($object);