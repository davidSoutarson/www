<?php

$prenom ="";
 $nom = "";
 $pseudo = "";
 $user_email = "";


function secur($modif){
 $modif =  trim($modif);
 $modif =  stripslashes($modif);
 $modif =  strip_tags($modif);
 $modif =  htmlspecialchars($modif);
 return $modif;
 }

 $prenom = secur($_POST['prenom']);
 $nom = secur($_POST['nom']);
 $pseudo = secur($_POST['pseudo']);
 $user_email = secur($_POST['user_email']);

 ?>
