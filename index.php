<?php
  include './includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP PHP</title>
</head>
<body>
  <?php
    $person1 = new classes\Person\Person('Mauro', 'brown', 43);
    echo $person1->getName();
  ?>
</body>
</html>