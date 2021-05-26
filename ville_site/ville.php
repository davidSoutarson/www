<?php require('inc_conection.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <?php
    // 1. récuperartion de la variable externe
    $id = $_GET['id'];

    // 3. requête.
    $result = $mysqli->query('SELECT ville_id , ville_nom, ville_texte
      FROM villes WHERE ville_id = '. $id );

    //4. création d'un nouvelle array
    $row = $result->fetch_array();

    // 5.destiner a l'afichage
    $nom = $row['ville_nom'];
    $texte = $row['ville_texte'];
     ?>

    <title><?php echo $nom ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="utf-8">
  </head>
  <body>
    <div>
      <h1><?php echo $nom ?></h1>
      <p> <?php echo $texte ?></p>
    </div>
<?php require('inc_menue.php') ?>
<?php require('inc_footer.php') ?>
  </body>
</html>
