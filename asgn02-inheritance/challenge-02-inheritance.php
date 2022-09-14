<?php

class Sports {

  var $category;
  var $equipment;
  var $is_individual = false;
  var $is_team = false;

  function description() {
    return $this->category . ' requires ' . $this->equipment;
  }
}

class Triathlon extends Sports {
  var $is_individual = true;
}

class Polo extends Sports {
  var $is_team = true;

  var $has_animal = true;
  var $animal = 'horse';
}
?>
