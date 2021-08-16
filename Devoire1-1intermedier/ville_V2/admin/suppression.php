<?php require('../inc_conection.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php //recuperation de variable externe
    $id = $_GET['id'];
    #requete d'afichage
$resulut = [];
$result = $mysqli->query('SELECT ville_nom
                          FROM villes');
$row = $result -> fetch_array();
$ville_nom = $row['ville_nom'];

/*____________requette et afichage pays_________________________________________*/

$result = [];
$pays_nom = [];
$result = $mysqli->query('SELECT pays_nom
                           FROM pays');
$row = $result -> fetch_array();
$pays_nom = $row['pays_nom'];

    //requete de suppression.
    if ($mysqli->query('DELETE FROM villes WHERe ville_id =' . $id))
    {
      $message = ' <p class="message"> La ville:'. $ville_nom .' a bien été suprimée dans la basse.</br><a href="liste.php">Accéder a la liste des villes </a> </p> ';
    }
    else {
        $message = ' <p class="error"> Erreur de suppression </p> ';
    }

    //requete de suprestion .
    if ($mysqli->query('DELETE FROM pays WHERe pays_id =' . $id))
    {
      $message = ' <p class="message"> Le pays '.$pays_nom.' a bien été suprimée dans la basse.</br><a href="liste.php">Accéder a la liste des villes </a> </p> ';
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
