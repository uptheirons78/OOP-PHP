<?php

namespace classes\Person;

class Person {

  // Properties
  private $name;
  private $eyeColor;
  private $age;

  public static $drinkingAge = 21;

  // Constructor
  public function __construct($name, $eyeColor, $age) {
    $this->name = $name;
    $this->eyeColor = $eyeColor;
    $this->age = $age;
  }

  // Methods
  public function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public static function setDrinkingAge($newDA) {
    self::$drinkingAge = $newDA;
  }
}