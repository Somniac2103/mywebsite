<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  require_once 'Classes/Car.php';

  $car01 = new Car("Volvo", "Green");

  echo $car01->getColor();
  echo "hello";

  ?>
</body>

</html>