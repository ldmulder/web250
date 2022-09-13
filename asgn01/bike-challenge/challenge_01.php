<?php

class Bicycle {

  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg = 0.0;

  function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")"; 
  }

  function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

}

$mogo = new Bicycle;
$mogo->brand = 'Mongoose';
$mogo->model = 'Juneau';
$mogo->year = '2020';
$mogo->description = 'Fat Tire';
$mogo->weight_kg = 14.0;

$can = new Bicycle;
$can->brand = 'Cannondale';
$can->model = 'Trail';
$can->year = '2020';
$can->description = 'Mountain Bike';
$can->weight_kg = 19.5;

echo $mogo->name() . "<br />";
echo $can->name() . "<br />";

echo $mogo->weight_kg . "<br />";
echo $mogo->weight_lbs() . "<br />";

$mogo->set_weight_lbs(20);
echo $mogo->weight_kg . "<br />";
echo $mogo->weight_lbs() . "<br />";

?>
