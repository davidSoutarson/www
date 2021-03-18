
<?php
//1.0 connection
//declaration de la variable $mysqli :$mysqli = new mysqli(' ip serveur||ip locale ||nom du serveur', 'root||identifient', 'mots-de-passe || ou rien ', 'nom de la base de doner',' facultatife dans notre cas por utiliser pour la conetion 3306 3308')
// new mysqli("127.0.0.1|ou|localhost", "root", "", "nom de la base de doner", "por facutatife  3308||3306");
$mysqli = new mysqli('localhost','root','','projet_villes');

//2.0 requête
// Nous stokcon dans la variable $result le contenue de la conexion sur les champ de la table desire:
// Nous avons vu que la requête SELECT permet de récupérer plusieurs
// champs en le séparant avec une virgule. La requête s’écrira donc comme
// ceci :
// $result = $mysqli -> query('SELECT champ, champ,champ FROM table');

$result = $mysqli->query('SELECT ville_id, ville_nom FROM villes');

//3.a transformation en array avec fetch_array ;

while ($row = $result->fetch_array())
{
  // 3.b creation d'un nouveau tatbleau pour afichage ultélrieur
  //création du nouveau tableau $villes ;

  $villes [$row ['ville_id']] = $row['ville_nom'];
}

/* Teste porter exterieur variable $villes
echo "<pre>";
print_r($villes);
echo "</pre>"; */

//4. Afichage

  ?>

  <!DOCTYPE html>
  <html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title> Cas pratique 3 Premier script PHP-MySQL </title>
    </head>
    <body>

      <table border=1>
        <th>Id</th><th>villes</th>
        <?php foreach ($villes as $id => $ville) : ?>
          <tr>
            <td><?php echo $id ?></td>
            <td> <?php echo $ville ?></td>
          </tr>
        <?php endforeach ?>
      </table>


    </body>
  </html>

  <?php
   //Améliorer les performances du serveur
   $result->free(); /* Liberation des résultats */

   $mysqli->close(); /* Fermeturde la connexion */

  ?>
