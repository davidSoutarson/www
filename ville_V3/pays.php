<?php require('inc_conextion.php');
      require('bdd_recherche.php');

?>
<?php
  $id = $_GET['id'];

$result = [];
$pays_id =[];
$pays_nom =[];
$result = $mysqli->query('SELECT pays_id ,pays_nom
                          FROM pays
                          WHERE pays_id='.$id
                          );

$row= $result->fetch_array();

  $pays_id = $row['pays_id'];
  $pays_nom = $row['pays_nom'];


$result = [];
$ville_pays_id = [];
$nom = [];
$result = $mysqli->query('SELECT ville_id , ville_nom, ville_texte,pays_id
                            FROM villes
                            WHERE pays_id '
                          );

  $row = $result->fetch_array();

  $nom = $row['ville_nom'];
  $ville_pays_id = $row['pays_id'];


  $texte = [];
  $result = $mysqli->query('SELECT  ville_texte
                              FROM villes
                            '
                            );
  $texte = $row['ville_texte'];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <?php  $id = $_GET ['id']; ?>
    <meta charset="utf-8">
    <title><?php echo $pays_nom ; ?></title>
  </head>
  <body>
    <h1> un pays : <?php echo $pays_nom. "<br>"; ?> </h1>



    <?php
    if($ville_pays_id == $pays_id)
    {
      echo $pays_nom. '<br>';
      while ($row= $result->fetch_array())
      {
      echo  "<p>" .$texte = $row['ville_texte']."</P>";
      }
      echo "<br>".$nom = $row['ville_nom'] ;
    }

    ?>
  </body>
</html>
