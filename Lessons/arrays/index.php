<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  /*  $fruits = array("Apple", "Banana", "Cherry");
  $fruits = ["Apple", "Banana", "Cherry"];
  echo $fruits[1];

  $fruits[] = "Orange";
  echo $fruits[3];

  unset($fruits[1]);
  echo $fruits[1];

  array_splice($fruits, 0, 1); */

  $tasks = [
    "laundry" => "Barry",
    "trash" => "Frida",
    "vacuum" => "Basse",
    "dishes" => "Bella"
  ];

  sort($tasks); //turns array into indexed array
  array_push($fruits, "mango"); //only for indexed array
  //echo ($tasks["trash"]);
  array_splice($fruits, 2, 0, "Mango");
  print_r($tasks);
  echo count($tasks);





  ?>
</body>

</html>