<?php
  include __DIR__ . '/includes/person.inc.php';
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
    $person1 = new Person();
    $person1->setName('Mauro');
    echo "<p>{$person1->name}</p>";
  ?>
</body>
</html>