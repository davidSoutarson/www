<?php
//1.  Connexion à la base de données
$mysqli = new mysqli('localhost','root','','projet_modeles');



//2. Requête MySQL

$result = $mysqli -> query('SELECT client_id, client_nom, modele_id FROM clients ');



// 3.a.  tensfomation en array avec fetch_array
while ($row = $result->fetch_array())
{
  $client_id = $row['client_id'];
  $client_nom = $row['client_nom'];
  $modele_id = $row['modele_id'];
  $clients[$client_id] ['nom'] = $client_nom ;
  $clients[$client_id] ['commande'] = $modele_id ;
}
/*teste
echo "<pre>";
print_r($clients);
echo "</pre>";*/


//afichage

foreach ($clients as $id => $client)
{

echo $client ['nom'] . ' : '; //affiche le nom du client
// recuperation de l'identifiant de la référance pour ce client

$modele_id = $client ['commande'];
$result = $mysqli->query('SELECT modele_nom FROM modeles WHERE modele_id = '. $modele_id);
//requête pour recuperer le nom de la referance
$row = $result->fetch_array();

$modele_nom = $row['modele_nom'];
echo $modele_nom . '<br>'; //afichage du nom de la referance

}

 ?>
