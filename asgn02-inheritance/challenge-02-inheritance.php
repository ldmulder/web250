<?php

class Sports {

  var $category;
  var $equipment;
  var $is_individual = false;
  var $is_team = false;

  function description() {
    return $this->category . ' and requires ' . $this->equipment . '.';
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

// code from KS that outputs readable Class info
function inspect_class($class_name) {
  $output = '';

  $output .= $class_name;
  $parent_class = get_parent_class($class_name);
  if($parent_class != '') {
    $output .= " extends {$parent_class}";
  }
  $output .= "\n";

  $class_vars = get_class_vars($class_name);
  ksort($class_vars);
  $output .=  "properties: \n";
  foreach($class_vars as $k => $v) {
    $output .=  "- {$k}: {$v}\n";
  }

  $class_methods = get_class_methods($class_name);
  sort($class_methods);
  $output .=  "methods: \n";
  foreach($class_methods as $k) {
    $output .=  "- {$k}\n";
  }

  return $output;
}



$class_names = ['Sports', 'Triathlon', 'Polo'];
foreach($class_names as $class_name) {
  echo nl2br(inspect_class($class_name));
  echo '<br />' . '<br />';
}

$triathlon = new Triathlon;
$triathlon->category = 'Multi-sports';
$triathlon->equipment = 'clothing for each event and a bicycle';
echo 'Triathlon is included in ' . $triathlon->description();
echo '<br>';

$polo = new Polo;
$polo->category = 'Horse Sports';
$polo->equipment = 'a long-handled mallet and a ball';
echo 'Polo is included in ' . $polo->description();
echo '<br>';

?>
