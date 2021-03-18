
<?php
/*Compte tenu des exemples précédents, l’organisation suivante s’impose
naturellement :
1. connexion à la base de données ;
2. requête MySQL ;
3. boucle et fetch_array ;
4. affichage HTML (ou autre action).*/

//1.  Connexion à la base de données
$mysqli = new mysqli('localhost','root','','projet_villes');

echo var_dump($mysqli);

//2. Requête MySQL
  $result = $mysqli -> query('SELECT ville_id , ville_nom FROM villes');

// 3.a. boucle et tensfomation en array avec fetch_array

while ($row = $result->fetch_array()) {
    // 3.b. création du nouveau array pour affichage  ulerrieur
    $villes[$row['ville_id']] = $row ['ville_nom'];
}

/*Teste porter exterieur variable $villes
echo "<pre>";
print_r($villes);
echo "</pre>";*/

 ?>

 <?php
 //4. Affichage HTML (ou autre action)
  echo "<ul>";
  foreach ($villes as $id => $ville) {
   echo "<li>";
   echo $id . ' - ' . $ville;
   echo "</li>";
  }
  echo "</ul>";

  ?>

  <?php
  //Améliorer les performances du serveur
  $result->free(); /* Liberation des résultats */

  $mysqli->close(); /* Fermeturde la connexion */

 ?>
