<?php
  $prenom = "";
  $nom = "";
  $pseudo = "";
  $email = "";

#creation de la fontion securisation
  function securisation($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = strip_tags($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
  }
#apele de securisation

    $prenom = securisation($_POST['prenom']);
    $nom = securisation($_POST['nom']);
    $pseudo = securisation($_POST['pseudo']);
    $email = securisation($_POST['email']);

#encodage mots de passe





    ?>
