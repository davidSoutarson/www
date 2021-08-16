<?php

require 'menu.php';
?>


<?php
//srypte
#### variable declaration ####

$id = $_GET['id']; #recuperation id lien url avec GET

 #variable en php 
$result = [];
$row =[];

$pays_id =[];
$pays_nom =[];
$paysp =[];

$ville_id = [];
$ville_nom = [];
$villesp= [];


/*note ATENTION a bien teste les requetes SQL avec PHP MyAdmin :table+ongler SQL peuve etre source d'Erreur*/
$requet='SELECT pays_id,pays_nom FROM pays';
$result = $mysqli->query($requet);
/* Tableau associatif et numérique  utilisation mode optinelle MYSQLI_BOTH EN argumet de la fonction fetch_array()*/
  while ($row = $result->fetch_array(MYSQLI_BOTH)) {
    $pays_id = $row['pays_id'];
    $pays_nom = $row['pays_nom'];
    $paysp[$pays_id] = $pays_nom;
  }

###########################  ville et pays ########################################

/*note ATENTION a bien teste les requetes SQL avec PHP MyAdmin :table+ongler SQL peuve etre source d'Erreur*/
$requet='SELECT ville_id,ville_nom  FROM villes WHERE pays_id = '.$id ;
$result = $mysqli->query($requet);
/* Tableau associatif et numérique  utilisation mode optinelle MYSQLI_BOTH EN argumet de la fontion fetch_array()*/
   while ($row= $result->fetch_array(MYSQLI_BOTH) ) {
    $ville_id = $row['ville_id'];
    $ville_nom = $row['ville_nom'];
    $villesp[$ville_id] = $ville_nom;
  }

 ?>
  <!-- afichage html -->
  <?php
    require 'bar_de_recherche.php';
   ?>

<br>_______________________________________________________________________</br>
  <h2>page des pays</h2>

    <article class="">
      <h3>selectioner un pays</h3>
    <?php foreach ($paysp as $id => $pays) : ?>
        <li> <a href="pays.php?id=<?php echo $id ?>"><?php echo $pays ?></a>  </li>
      <?php endforeach ?>

    </article>
    <article class="">
      <h3>selectioner une ville </h3>
      <?php foreach ($villesp as $id => $ville): ?>
        <li> <a href="ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a>  </li>
      <?php endforeach; ?>
    </article>



<?php require 'footeur.php';?>
