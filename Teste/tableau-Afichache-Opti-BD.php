<?php
//1.  Connexion à la base de données
$mysqli = new mysqli('localhost','root','','projet_villes');

//2. Requête MySQL
  $result = $mysqli -> query('SELECT ville_id, ville_nom, population FROM villes');

// 3.a.  tensfomation en array avec fetch_array

while ($row = $result->fetch_array()) {

    $villes [$row['ville_id']] ['nom'] = $row['ville_nom'];
    $villes [$row['ville_id']] ['population'] = $row['population'];
}
/*Teste porter exterieur variable $villes
echo "<pre>";
print_r($villes);
echo "</pre>";*/

//4. Afichage

 ?>

 <table border=1>
   <th>Id</th><th>villes</th><th>population</th>
   <?php foreach ($villes as $id => $ville) : ?>
     <tr>
       <td><?php echo $id  ?></td>
       <td><?php echo $ville['nom']  ?></td>
       <td><?php echo $ville['population']  ?></td>
     </tr>

   <?php endforeach ?>
 </table>

<?php
 //Améliorer les performances du serveur
 $result->free(); /* Liberation des résultats */

 $mysqli->close(); /* Fermeturde la connexion */

?>
