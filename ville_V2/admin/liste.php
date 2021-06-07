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
$result2 = $mysqli->query('SELECT DISTINCT(pays_nom)
                          FROM pays p
                          INNER JOIN villes v ON v.pays_id = p.pays_id
                          ORDER BY pays_nom');

while ($pays_row= $result2->fetch_array())
  {
    // code... 3.b2 creation d'un array pour afichage hors de la boucle les pays
    $pays [$pays_row['pays_nom']] = $pays_row['pays_nom'];// ce qui rand une patie de se tableau superflus   $pays = $pays_row['pays_nom'] ; ???
    /*$pays [$pays_row['pays_id']] = $pays_row['pays_nom']; le probleme etait  du au ORDER BY pays_nom L 23*/
  }
?>
<!-- ________________________________4 Afichage________________________________ -->



  <ul>

    <?php foreach ($villes as $id => $ville) : ?>
      <li>
        <a href="../ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a>
        <a href="edition.php?id=<?php echo $id ?>"> -[editer]- </a>
        <a href="suppression.php?id=<?php echo $id ?>"> [SUPPRIMER] </a>
      </li>

    <?php endforeach ?>
  </ul>

<p>liste pays afichaghe a par tire </p>
  <ul>
    <?php foreach ($pays as $id => $pays) : ?>
    <li>
      <a href="pays.php ?id=<?php echo $id ?> "> <?php echo $pays ?></a>
    </li>
    <?php endforeach ?>
  </ul>
