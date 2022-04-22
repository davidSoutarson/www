<?php
require 'Personnage.php';

//intentiation!
$merlin = new Personnage("Merlin");

// $merlin->nom = "Merlin";

$harry = new Personnage("Harry");

// var_dump($merlin);
//
// var_dump($merlin->crier());
//
// var_dump($merlin->vie , $merlin->atk , $merlin->crier() );
//
//$merlin->regenerer();

 var_dump($merlin->vie);

// $harry -> vie = -20 ;
//

//
// $merlin->regenerer(5);
// $harry->regenerer();

$merlin->attaque($harry);

var_dump($merlin);
var_dump($harry);

var_dump($harry->mort());

if($harry->mort()){
  echo " Harry est mort :( ";
}else {
  echo "Hary a survécu avec " . $harry->vie . " poin de vie";
}


?>
