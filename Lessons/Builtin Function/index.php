<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  //STRINGS

  $string = "Hello World!";

  echo strlen($string);
  echo strpos($string, "o", 5);
  echo str_replace("World", "Place", $string);
  echo substr($string, 2, 2);
  print_r(explode(" ", $string));

  //MATH

  $number = -5.5;

  echo abs($number);
  echo round($number);
  echo pow(3, 2);
  echo sqrt(16);
  echo rand(1, 100);

  //ARRAY

  $array = ["apple", "banana", "orange"];
  $array1 = ["apple", "banana", "orange"];
  $array2 = ["kiwi", "lichi"];

  echo  count($array);
  echo is_array($array);
  array_push($array, "Kiwi");
  print_r($array);

  array_pop($array);
  print_r($array);

  print_r(array_reverse($array));
  print_r(array_merge($array1, $array2));


  //DATE and TIME
  echo date("Y-m-d H:i:s");
  echo time();
  $date = "2023-04-11 12:00:00";
  echo strtotime($date);

  ?>


</body>

</html>