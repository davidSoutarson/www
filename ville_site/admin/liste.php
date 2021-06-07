<?php
require('../inc_conection.php');//Optionele ????
/*
ficchier inclus : inc_menue.php
contient le menu de suprétion
---------------------------------------------------------------------------*/
//2.requête
$result = $mysqli->query('SELECT ville_id ,ville_nom FROM villes');
// fetch_array
while ($row= $result->fetch_array())
{
  // code... 3.b creation d'un array pour afichage hors de la boucle
  $villes [$row['ville_id']] = $row['ville_nom'];
}
//4 Afichage
?>
  <ul>

    <?php foreach ($villes as $id => $ville) : ?>
      <li>
        <a href="../ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a>
        <a href="edition.php?id=<?php echo $id ?>"> -[editer]- </a>
        <a href="suppression.php?id=<?php echo $id ?>"> [SUPPRIMER] </a>
        <a href="edition2test.php?id=<?php echo $id ?>"> -[test_PROB]- </a>
        <a href="edition2test_V2.php?id=<?php echo $id ?>"> -[test_PROB-V2]- </a>
      </li>
    <?php endforeach ?>
  </ul>
