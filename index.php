<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  $brand = "Volvo";
  $color = "Green";

  function getCarInfo($brand, $color)
  {
    return "Brand: " . $brand . ", Color: " . $color;
  }

  echo getCarInfo($brand, $color);
  ?>
</body>

</html>