<?php

$inp_nom = "";
$inp_prenom = "";
$inp_pseudo = "";
$inp_user_loging = "";


function securisation($donnees){
  $donnees =trim($donnees);
  $donnees =strip_tags($donnees);
  return $donnees;
}


 ?>
