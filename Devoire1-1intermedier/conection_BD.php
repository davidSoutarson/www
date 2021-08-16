<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //conextion alabase de doner
    //$mysqli variable content la permition de conection
    $mysqli = new mysqli('localhost','root','','projet_villes');

    //requéte
      $result = $mysqli -> query('SELECT ville_id , ville_nom , population FROM villes');
    // tranformation en tableau  et afichage avec while

    //requete teste
    //  $mysqli ->exec("CREATE DATABASE test266"); probleme exec== equivalant mysquli

    echo '<ul>';
    while ($row = $result->fetch_array())
    {
      #simplification
      $ville_id = $row ['ville_id'];
      $ville_nom = $row ['ville_nom'];
      $population = $row ['population'];

      echo '<li>' . $ville_id . ' - ' . $ville_nom .' - ' . $population .'</li>';
    }
    echo '</ul>';

    //Améliorer les performances du serveur
    $result->free(); /* Liberation des résultats */

    $mysqli->close(); /* Fermeturde la connexion */
     ?>

  </body>
</html>
