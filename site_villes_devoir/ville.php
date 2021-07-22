<?php
require 'menu.php';
?>

<?php
//srypte
#### variable declaration ####

$id = $_GET['id']; #recuperation id lien url avec GET

/* LES varible suivente son déclarer pour eviter une Erreur de tipe undefine variable
sans l'utlisation de conditionelle */

$ville_nomP = '';
$ville_texteP ='';
$ville_idP = '';

/*note ATENTION a bien teste les requetes SQL avec PHP MyAdmin :table+ongler SQL peuve etre source d'Erreur*/
$requet = 'SELECT ville_id,ville_nom FROM villes';
$result = $mysqli->query($requet);
/* Tableau associatif et numérique  utilisation mode optinelle MYSQLI_BOTH EN argumet de la fontion fetch_array()*/
while ($row= $result->fetch_array(MYSQLI_BOTH)) {
  $ville_id = $row['ville_id'];
  $ville_nom = $row['ville_nom'];
  $villes[$ville_id] = $ville_nom;
}
###############################Presentattion ville == id ville ##############################################

/* Tableau associatif et numérique  utilisation mode optinelle MYSQLI_BOTH EN argumet de la fontion fetch_array()*/
$requet = 'SELECT ville_id,ville_nom,ville_texte FROM villes WHERE ville_id='.$id;
$result = $mysqli->query($requet);

while ($row= $result->fetch_array(MYSQLI_BOTH)) {
  $ville_idP = $row['ville_id'];
  $ville_nomP = $row['ville_nom'];
  $ville_texteP =$row['ville_texte'];

}

 ?>
<!-- afichage html -->
<?php
  require 'bar_de_recherche.php';
 ?>

  <h2>page des villes</h2>


</article>
<article class="">
  <h3>selectioner une ville</h3>
  <?php foreach ($villes as $id => $ville): ?>
    <li> <a href="ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a>  </li>
  <?php endforeach; ?>
</article>

<article class="">
  <h3>presentattion de la ville : <?php echo $ville_nomP; ?> </h3>

  <p><?php echo $ville_nomP; ?></p>
  <p><?php echo $ville_texteP; ?></p>

</article>



<?php require 'footeur.php';?>
