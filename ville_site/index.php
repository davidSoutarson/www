<?php require('inc_conection.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <header>
      <div class="presentation">
        <h1>Accueil site des ville </h1>
        <p> Tp de david soutarson: </p>
        <p>Bienvenue sur le mini-site consacre au villes.</p>
        <p>Ce cite utilise PHP et Mysql</p>
        <p>utisiler le menu de navigatrion pour consulterr les page du site</p>
        <p>Bonne visite</p>
      </div>
<!-- inclusion du menu_principale= nav class menu_principale && fichier = inc_menue.php -->
      <?php require('inc_menue.php') ?>
<!-- fin nav bar -->
    </header>
    <footer>
      <?php require('inc_footer.php') ?>
    </footer>
  </body>
</html>
