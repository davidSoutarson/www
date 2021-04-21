<?php
//conextion alabase de doner
$mysqli = new mysqli('localhost','root','','projet_villes');

//requéte
  $result = $mysqli -> query('SELECT ville_id , ville_nom FROM villes');
// tranformation en tableau  et afichage avec while

echo '<ul>';
while ($row = $result->fetch_array())
{
  #simplification
  $ville_id = $row ['ville_id'];
  $ville_nom = $row ['ville_nom'];

  echo '<li>' . $ville_id . ' - ' . $ville_nom .'</li>';
}
echo '</ul>';

//Améliorer les performances du serveur
$result->free(); /* Liberation des résultats */

$mysqli->close(); /* Fermeturde la connexion */

 ?>
