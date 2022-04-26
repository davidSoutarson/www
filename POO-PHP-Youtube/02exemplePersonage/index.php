<?php
require 'Personnage.php';

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");

$merlin->regenerer(5);
$harry->regenerer();

$merlin->attaque($harry);

var_dump($merlin);
var_dump($harry);

if($harry->mort()){
  echo " Harry est mort :( <br>";
}else {
  //recuper et afiche le nombre de point de vie
  echo "Hary a survécu avec " . $harry->getVie() . " poin de vie <br>";
}

$harry->regenerer();
echo $merlin->getNom() . $harry->getVie() . " poin de vie <br>" ;

 ?>
