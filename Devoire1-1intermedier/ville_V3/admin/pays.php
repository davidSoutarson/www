<?php require('../inc_conection.php'); ?>

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

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <?php  $id = $_GET ['id']; ?>
    <meta charset="utf-8">
    <title><?php echo $Pnom ; ?></title>
  </head>
  <body>
    <h1> un pays : <?php echo $pays_nom "<br>"; ?> </h1>
  </body>
</html>
