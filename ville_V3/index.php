<?php require('inc_conextion.php'); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Accueil</title>
  </head>
  <body>
    <header>
      <?php  require('inc_menue.php'); ?>
    </header>
    <main>
      <h1>Accueil villes site</h1>

      <article class="user-recherche">
        <div class="Resulta-recherche">
          <h2> vous recherchez </h2>
            </ul>
              <?php
                while ($row = $allvilles->fetch_array()) {
                  echo "<li>".$row ['ville_nom']."</li>";
                }
              ?>
            </ul>
        </div>
      </article>

      <article class="page-presentation">

        <div class="presentation">
        <h2>mini site des villes</h2>
          <p> Tp de david soutarson: 229855 </p>
          <p>Bienvenue sur le mini-site consacre au villes.</p>
          <p>Bonne visite</p>
        </div>

      </article>

    </main>

  </body>
</html>
