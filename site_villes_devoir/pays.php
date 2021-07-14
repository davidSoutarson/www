<?php require 'header.php';?>

<?php
#### variable declaration ####

$id = $_GET['id']; #recuperation id lien url avec GET

/* variable optinelle en php || utile pour compreention
$result = [];
$row =[];

$pays_id =[];
$pays_nom =[];
$pays =[];

$ville_id = [];
$ville_nom = [];
$villes= [];
*/

/*note ATENTION a bien teste les requetes SQL avec PHP MyAdmin :table+ongler SQL peuve etre source d'Erreur*/
$requet='SELECT pays_id,pays_nom FROM pays';
$result = $mysqli->query($requet);
/* Tableau associatif et numérique  utilisation mode optinelle MYSQLI_BOTH EN argumet de la fonction fetch_array()*/
  while ($row = $result->fetch_array(MYSQLI_BOTH)) {
    $pays_id = $row['pays_id'];
    $pays_nom = $row['pays_nom'];
    $pays[$pays_id] = $pays_nom;
  }

###########################  ville et pays ########################################

/*note ATENTION a bien teste les requetes SQL avec PHP MyAdmin :table+ongler SQL peuve etre source d'Erreur*/
$requet='SELECT ville_id,ville_nom  FROM villes WHERE pays_id = '.$id ;
$result = $mysqli->query($requet);
/* Tableau associatif et numérique  utilisation mode optinelle MYSQLI_BOTH EN argumet de la fontion fetch_array()*/
   while ($row= $result->fetch_array(MYSQLI_BOTH) ) {
    $ville_id = $row['ville_id'];
    $ville_nom = $row['ville_nom'];
    $villes[$ville_id] = $ville_nom;
  }

 ?>
  <!-- afichage html -->

<?php require 'menu.php'; ?><!-- afichage du nemue -->

<main>

  <h2>page des pays</h2>

    <article class="">
      <h3>selectioner un pays</h3>
    <?php foreach ($pays as $id => $pays) : ?>
        <li> <a href="pays.php?id=<?php echo $id ?>"><?php echo $pays ?></a>  </li>
      <?php endforeach ?>

    </article>
    <article class="">
      <h3>selectioner une ville </h3>
      <?php foreach ($villes as $id => $ville): ?>
        <li> <a href="ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a>  </li>
      <?php endforeach; ?>
    </article>

</main>

<?php require 'footeur.php';?>
