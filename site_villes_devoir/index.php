<?php
session_start(); //inisialisation de la session
if (!isset($_SESSION['compte_cree']) AND !isset($_SESSION['conectez']) ) {
  header('location:conection.php');
}

require 'header.php';
require 'menu.php';
?>

<?php

$requet='SELECT prenom,nom FROM user';
$result = $mysqli->query($requet);


 ?>

  <!-- afichage html -->
<?php
  require 'bar_de_recherche.php';
 ?>


  <h2>page accueil</h2>


  <article class="">

    <p> Bien venue sur le site des ville . Bonne visite :</p>


      <?php


      if ($_SESSION ) {

          if (isset($_SESSION['compte_cree']) ) {
            echo $_SESSION['compte_cree']. "" .$_SESSION['compt_nom'] ."".$_SESSION['compt_pseudo'] ."".$_SESSION['compt_maile'] ;

          }

          if (isset($_SESSION['conectez']) ) {
            echo $_SESSION['conectez']."" .$_SESSION['conect_pseudo'] ."".$_SESSION['conect_loging'] ;

          }

         //var_dump($_SESSION);
      }

      ?>

  </article>

<?php require 'footeur.php';?>
