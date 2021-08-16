<?php
require 'fonc_conecter.php';
forcer_user_connecter();
require 'inc_conextion.php';
 //conextion bdd ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./image/icon.ico">
    <title>Accueil</title>
  </head>
  <body>
    <header>
      <?php  require('inc_menue.php');// afiche le menu qui contient la partie de bdd_recherche ?>
    </header>
    <main>
      <h1>Accueil villes site</h1>
      <h2>bonjour: </h2>

    <div class="grid">

      <article class="user-recherche">
        <div class="Resulta-recherche">
          <h2> vous recherchez</h2>
            <ul>
              <?php
              //uliisation recherche bdd
                while ($row = $allvilles->fetch_array()) {

                   echo "<li> <a href='ville.php?id=$row[ville_id]'> " . $r=$row['ville_nom']. " </a> </li>" ;
                }
              ?>
            </ul>
        </div>
      </article>

      <article class="page-presentation">
        <div class="presentation">
        <h2>mini site des villes</h2>
          <p> Tp de david soutarson: 229855
          Bienvenue sur le mini-site consacre au villes.
          Bonne visite</p>
        </div>
      </article>

  </div>
    </main>

  </body>
</html>
