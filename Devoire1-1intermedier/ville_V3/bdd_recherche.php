<?php
// partie requête BD
$allvilles = $mysqli->query('SELECT ville_nom, ville_id FROM villes ORDER BY ville_id DESC');

if (isset($_POST['r'])AND !empty($_POST['r'])) {
    $recherche = htmlspecialchars($_POST['r']);
    $allvilles = $mysqli->query('SELECT ville_nom,ville_id FROM villes WHERE ville_nom LIKE "%'.$recherche.'%" ORDER BY ville_id DESC');
}



 // partie ville et pays

 $result = $mysqli->query('SELECT ville_id ,ville_nom FROM villes');

 $result2 = $mysqli->query('SELECT pays_id ,pays_nom FROM pays');

  while ($row= $result->fetch_array())
  {
    // code... 3.b creation d'un array pour afichage hors de la boucle
    $villes [$row['ville_id']] = $row['ville_nom'];
  }

  while ($pays_row= $result2->fetch_array())
  {
    // code... 3.b creation d'un array pour afichage hors de la boucle
    $pays [$pays_row['pays_id']] = $pays_row['pays_nom'];
  }
  ?>
