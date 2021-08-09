<?php require('inc_conection.php'); ?>
<?php
// partie requête BD
$allvilles = $mysqli->query('SELECT * FROM villes ORDER BY ville_id DESC');

if (isset($_POST['r'])AND !empty($_POST['r'])) {
  $recherche = htmlspecialchars($_POST['r']);
  $allvilles = $mysqli->query('SELECT ville_nom FROM villes WHERE ville_nom LIKE "%'.$recherche.'%" ORDER BY ville_id DESC');
}
// ci desou afichage de la barre de recherche en html
?>

<form method="post">
  <input type="search" name="r" placeholder="RECHERCHE"  >
  <input type="submit" name="envoyer" value="RECHERCHE">
</form>

<p>Resulta des recherches</p>
</ul>
<?php
while ($row = $allvilles->fetch_array()) {
  echo "<li>".$row ['ville_nom']."</li>";
}
?>
</ul>
