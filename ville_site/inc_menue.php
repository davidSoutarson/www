<?php
/*
ficchier inclus : inc_menue.php
contient le menu de navigation
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
<div class="menue">
  <ul>
    <li> <a href="index.php">Accueil</a></li>

    <?php foreach ($villes as $id => $ville) : ?>
      <li> <a href="ville.php?id=<?php echo $id ?>"><?php echo $ville ?></
      a></li>
    <?php endforeach ?>

  </br>
      <li> <a href="admin/index.php"> Administration </a> </li>
  </ul>
</div>
