<?php
/*
ficchier inclus : inc_menue.php
contient le menu de navigation
---------------------------------------------------------------------------*/
//2.requête
$result = $mysqli->query('SELECT ville_id ,ville_nom FROM villes');
$result2 = $mysqli->query('SELECT pays_id ,pays_nom FROM pays');
// fetch_array
while ($row= $result->fetch_array())
{
  // code... 3.b creation d'un array pour afichage hors de la boucle
  $villes [$row['ville_id']] = $row['ville_nom'];
}

while ($pays_row= $result2->fetch_array())
{
  // code... 3.b creation d'un array pour afichage hors de la boucle
  $pays [$pays_row['pays_id']] = $pays_row['pays_nom'];
}
//4 Afichage
?>
<div class="menue">
  <ul>
    <li> <a href="index.php">Accueil</a></li> </br>

    <?php foreach ($villes as $id => $ville) : ?>
      <li>
        <a href="ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a>
     </li>
    <?php endforeach ?>

  </br>
      <li> <a href="admin/index.php"> Administration </a> </li>
  </ul>

  <ul>
    <?php foreach ($pays as $id => $pays) : ?>
      <li> <a href="pays.php?id=<?php echo $id ?>"><?php echo $pays ?></
      a></li>
    <?php endforeach ?>
  </ul>
</div>
