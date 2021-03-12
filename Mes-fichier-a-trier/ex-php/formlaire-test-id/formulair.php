<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title>Formulaires</title>
  </head>
  <body>

    <h1>les formulaires</h1>

    <form action="resulta.php  " method="get">
    <p>  votre prenom : <input class = "vide" type="text" name="prenom"  > </p>
     <p>  votre email : <input type="text" name="email" ></p>
     <p>votre couleur préfèrée</p>
    <input type ="radio" name = "color" value="blanc"> Orange <br>
    <input type ="radio" name = "color" value="rouge"> Rouge <br>
    <input type ="radio" name = "color" value="ver"> Vert <br>
      <input type="submit" name ="validation" value="MDR" >
    </form> -->
  <?php

  //inutile pour linsetenps
    if(
        (!isset($_GET['validation']) )
        OR
        ( empty($_GET['prenom']) ) //si la varible prenon et vide
        OR //ou
        ( empty($_GET['prenom']) ) //si la varible maile et vide
        OR // ou
        (!isset($_GET['color']) ) //si la varile color nexite pas
      )
  {
    echo 'Tout les champ du formulaires doive etre remplis';
    var_dump($_GET);
  }
   else {
     //synplifion la sintax
         $prenom = $_GET['prenom'];
         $email = $_GET['email'];
         $color = $_GET['color'];
         echo ' votre prenon est ' .$prenom. ' votre email : ' .$email. ' et couleur :' .$color. '<br>';
   }

   ?>
<!--noir ver jaune rouge-->
<h2>nouveau formulaires</h2>
<p>se ne son que dezs piste de reflection</p>
<!--
<?php
/*
 $prenom = $_GET['prenom'];
 $nom = $_GET['nom'];
 $email = $_GET['email'];
 $pasword = $_GET['pasword'];


$couleur = array ( 0 =>'noir ', 1 =>'ver ',  2 =>'rouge ', 3 =>'jaune ' );
$couleur[0] = ('jaune');
$couleur[1] = ('ver');
$couleur[2] = ('rouge');
$couleur[3] = ('noir');

$clefCouleur = 0;

function champVide(){
  if(
    (empty($prenom2))
    or
    (empty($non))
    or
    (empty($email))
    )
  {
 return' value = "champ vide"';
 }
}



echo '<form id =form2 class=' .$couleur[0] .' action="resulta.php" method="get">';
    echo '<p> votre prenom : <input class =' .$couleur[$clefCouleur] . ' type="text" name="prenom " '.champVide().'  > </p>';
    echo '<p> votre nom :<input class = ' . $couleur[2] . ' type= " text"  name= "nom " '.champVide().' > </p>';
    echo '<p> votre email :<input class = ' . $couleur[1] . ' type= " text"  name= "email " '.champVide().' > </p>';
    echo '<p> votre mots de passe : <input class = ' . $couleur[0] . 'type =  "text" name = "pasword " value = "ptdr"> </p>';
    echo '<input type="submit" name ="validation">';

echo'</form>';

*/
 ?>

-->

  </body>
</html>
