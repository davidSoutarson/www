<?php require('../inc_conection.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php //recuperation de variable externe
    $id = $_GET['id'];
    //requete .
    if ($mysqli->query('DELETE FROM villes WHERe ville_id =' . $id))
    {
      $message = ' <p class="message"> La ville a bien été suprimée dans la basse.</br><a href="liste.php">Accéder a la liste des villes </a> </p> ';
    }
    else {
        $message = ' <p class="error"> Erreur de suppression </p> ';
    }
     ?>
    <title>suppression</title>
  </head>
  <body>
      <div>
        <?php echo "$message"; ?>
      </div>
  </body>
</html>
