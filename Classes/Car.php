<?php

class Car
{
  //Properties or Fields
  private $brand;
  private $color;
  // public $vehicleType = "car";

  //Constructor
  public function __constuct($brand, $color = "None")
  {
    $this->brand = $brand;
    $this->color = $color;
  }

  //Getter & Setter method
  public function getBrand()
  {
    return $this->brand;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setColor($color)
  {
    $allowedColors = [
      "red",
      "blue",
      "green",
      "yellow"
    ];
    if (in_array($color, $allowedColors)) {
      $this->brand = $color;
    }
  }

  //Method
  public function getCarInfo()
  {
    return "Brand: " . $this->brand . ", Color: " . $this->color;
  }
}
