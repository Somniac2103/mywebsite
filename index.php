<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  $fruits = array("Apple", "Banana", "Cherry");
  $fruits = ["Apple", "Banana", "Cherry"];
  echo $fruits[1];

  $fruits[] = "Orange";
  echo $fruits[3];


  ?>
</body>

</html>