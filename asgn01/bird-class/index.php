<?php

class Bird {

  var $commonName;
  var $food;
  var $nestPlacement;
  var $clutchSize;
  var $conservationLevel;
  var $song;

  function birdSong() {
    return $this->song;
  }

}

$bird1 = new Bird;
$bird1->commonName = 'Eastern Towhee';
$bird1->food = 'seeds, fruits, insects, spiders';
$bird1->nestPlacement = 'Ground';
$bird1->clutchSize = '2 - 6 eggs';
$bird1->conservationLevel = 'Low';
$bird1->song = 'drink-your-tea!';


$bird2 = new Bird;
$bird2->commonName = 'Indigo Bunting';
$bird2->food = 'seeds, berries, buds, insects';
$bird2->nestPlacement = 'fields and on the edges of woods, roadsides, and railroad';
$bird2->clutchSize = '3 - 4 eggs';
$bird2->conservationLevel = 'Low';
$bird2->song = 'what! what!';


echo $bird1->commonName . "<br />";
echo $bird1->food . "<br />";
echo $bird1->nestPlacement . "<br />";
echo $bird1->clutchSize . "<br />";
echo $bird1->conservationLevel . "<br />";
echo $bird1->birdSong() . "<br />" . "<br />";


echo $bird2->commonName . "<br />";
echo $bird2->food . "<br />";
echo $bird2->nestPlacement . "<br />";
echo $bird2->clutchSize . "<br />";
echo $bird2->conservationLevel . "<br />";
echo $bird2->birdSong() . "<br />";


?>
