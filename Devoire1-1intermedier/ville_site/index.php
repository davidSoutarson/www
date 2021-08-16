<?php require('inc_conection.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <?php

          $allvilles = $mysqli->query('SELECT * FROM villes ORDER BY ville_id DESC');
          $allvilles = $mysqli->query('SELECT ville_nom FROM villes WHERE ville_nom LIKE "paris" ORDER BY ville_id DESC');


echo var_dump($allvilles);
     ?>



      <div class="presentation">
        <h1>Accueil </h1>
        <p> Tp de david soutarson: 229855 </p>
        <p>Bienvenue sur le mini-site consacre au villes.</p>
        <p>Ce cite utilise PHP et Mysql</p>
        <p>utisiler le menu de navigatrion pour consulterr les page du site</p>
        <p>Bonne visite</p>
      </div>


      <?php require('inc_menue.php') ?>
      <?php require('inc_footer.php') ?>
