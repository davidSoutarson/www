<?php
/*
ficchier inclus : inc_menue.php
contient la conection a la base de donner
---------------------------------------------------------------------------*/
//2.requête
$result = $mysqli->query('SELECT ville_id ,ville_nom FROM villes');
//3.a transformation en array avec fetch_array
while ($row= $result->fetch_array())
{
  // code... 3.b creation d'un array pour afichage hors de la boucle
  $villes [$row['ville_id']]= $row['ville_nom'];
}
//4 Afichage
?>
<nav class="menu_principale">
  <ul>
    <li> <a href="index.php">Accueil</a></li>

    <?php foreach ($villes as $id => $ville) : ?>
      <li> <a href="ville.php?id = <?php echo $id ?>"> <?php echo $ville ?></a> </li>
    <?php endforeach ?>
  </ul>

</nav>
<!-- dans le fils: inc_footer = //Améliorer les performances liberation des variable  du serveur -->
