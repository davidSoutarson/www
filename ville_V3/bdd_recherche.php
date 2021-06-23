<?php
// partie requête BD
$allvilles = $mysqli->query('SELECT * FROM villes ORDER BY ville_id DESC');

if (isset($_POST['r'])AND !empty($_POST['r'])) {
    $recherche = htmlspecialchars($_POST['r']);
    $allvilles = $mysqli->query('SELECT ville_nom FROM villes WHERE ville_nom LIKE "%'.$recherche.'%" ORDER BY ville_id DESC');
}
// ci desou afichage de la barre de recherche en html
 ?>
