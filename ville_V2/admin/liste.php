<?php require('../inc_conection.php');
/*
ficchier inclus : inc_menue.php
contient le menu de suprétion
---------------------------------------------------------------------------*/
//requête 1 boucle 1
$result = $mysqli->query('SELECT ville_id
                          ,ville_nom
                          FROM villes');

while ($row= $result->fetch_array())
  {
  // code... 3.b creation d'un array pour afichage hors de la boucle
  $villes [$row['ville_id']] = $row['ville_nom'];
  }



//requete 2 boucle 2
$result2 = $mysqli->query('SELECT pays_id ,pays_nom FROM pays');

while ($pays_row= $result2->fetch_array())
  {

    $pays [$pays_row['pays_id']] = $pays_row['pays_nom'];

  }
?>
<!-- ________________________________4 Afichage________________________________ -->

<h2>Gestion des Villes et Pays.</h2>

<p>liste ville</p>
  <ul>
    <?php foreach ($villes as $id => $ville) : ?>
      <li>
        <a href="../ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a>
        <a href="edition.php?id=<?php echo $id ?>"> -[ Editer]- </a>
        <a href="suppression.php?id=<?php echo $id ?>"> [SUPPRIMER] </a>
      </li>

    <?php endforeach ?>
  </ul>

<p>liste pays  </p>
  <ul>
    <?php foreach ($pays as $id => $pays) : ?>
    <li>
      <a href="pays.php ?id=<?php echo $id ?> "> <?php echo $pays ?></a>
      <a href="suppression.php?id=<?php echo $id ?>"> [SUPPRIMER] </a>
    </li>
    <?php endforeach ?>
  </ul>
