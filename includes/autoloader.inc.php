<?php

function auto_loader($classname) {
  include_once str_replace("\\", "/", $classname) . '.class.php';
}

spl_autoload_register('auto_loader');