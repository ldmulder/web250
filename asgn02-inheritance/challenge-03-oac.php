<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description;
  private $weight_kg = 0.0;
  protected $wheels = 2;

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")"; 
  }

  public function wheel_details() {
    $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
    return "It has " . $wheel_string . ".";
  }

  public function weight_kg() {
    return $this->weight_kg . ' kg';
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return $weight_lbs . ' lbs';
  }

  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

}

class Unicycle extends Bicycle {
  protected $wheels = 1;
// test to see if $weight_kg is actually private
  // public function bug_test() {
   //  return $this->weight_kg;
 // }
}

$mogo = new Bicycle;
$mogo->brand = 'Mongoose';
$mogo->model = 'Juneau';
$mogo->year = '2020';

$uni = new Unicycle;


echo "Bicycle: " . $mogo->wheel_details() . "<br />";
echo "Unicycle: " . $uni->wheel_details() . "<br />" . "<br />";

echo "Set weight using kg<br />";
$mogo->set_weight_kg(10) . "<br />";
echo $mogo->weight_kg() . "<br />";
echo $mogo->weight_lbs() . "<br />" . "<br />";

echo "Set weight using lbs<br />";
$mogo->set_weight_lbs(20);
echo $mogo->weight_kg() . "<br />";
echo $mogo->weight_lbs() . "<br />" . "<br />";

// bug introduced to $weight_kg
// echo "Set weight for Unicycle<br />";
// $uni->set_weight_kg(1);
// echo $uni->weight_kg() . "<br />";
// echo $uni_>weight_lbs() . "<br />";

// $weight_kg should be private
// echo $uni->bug_test();

?>
