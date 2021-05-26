<?php
var_dump($_POST);

$errors = [];

if (empty($_POST['prenom'])) {
  $errors['prenom']="Vous n'avez pas renseiger votre Prenon";
}

if (empty($_POST['nom'])) {
  $errors['nom']="Vous n'avez pas renseiger votre Non" ;
}

if (empty($_POST['email'])) {
  $errors['email']="Vous n'avez pas renseiger votre Email";
}

if (!isset($_POST['condition_utilisater'])) {
  $errors['condition_utilisater']="choisier une condition d'utilisation";
}

if(!empty($errors))
{
 session_start(); //creation d'une session
  $_SESSION['errors'] = $errors;
  $_SESSION['inputs'] = $_POST ;
  header('Location: form02_anvoie.php');
}
else {
  // traitement de linformation
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];

  echo "<p> bonjour: " . $prenom . ", " .$nom. "</p>";

}


 ?>
