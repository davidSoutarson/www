<?php require('inc_conextion.php'); ?>
<!-- scripte php prou afichage des la villes et de leur deccription -->
<?php

$id = $_GET['id'];

$result = $mysqli->query('SELECT
                          ville_id,
                          ville_nom,
                          ville_texte
                          FROM villes
                          WHERE ville_id = '. $id );

//4. création d'un nouvelle array
$row = $result->fetch_array();

// 5.destiner a l'afichage
$nom = $row['ville_nom'];
$texte = $row['ville_texte'];
 ?>

<!--_______________________________afichage html______________________________________-->
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
      <link rel="icon" href="./image/icon.ico">
      <title><?php echo $nom ?></title>
  </head>
  <body>
    <header>
      <?php  require('inc_menue.php'); ?>
    </header>

    <main>
      <h1><?php echo $nom ?></h1>

      <div class="grid">

      <article class="user-recherche">
        <div class="Resulta-recherche">
          <h2> Vous recherchez </h2>
          <h3>une ville:</h3>
            <ul>
              <?php
              //uliisation recherche bdd
                while ($row = $allvilles->fetch_array()) {

                   echo "<li> <a href='ville.php?id=$row[ville_id]'> " . $row['ville_nom']. " </a> </li>" ;
                }
              ?>
            </ul>
        </div>
      </article>


      <article class="page-presentation">
        <div class="presentation">
        <h2>presentation de la ville: <?php echo $nom?></h2>
      <p> <?php echo $texte ?></p>
        </div>
      </article>

    </div>
    </main>
