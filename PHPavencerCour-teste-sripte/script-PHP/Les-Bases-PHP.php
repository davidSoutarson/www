<?php
echo '<h2>les basse du PHP<h2>';

echo "<h1 class = 'titre segondair'> Ceci et ecrie en php l'entete au desu de mois a etait inculuse </h1>";

echo " nous allon echaper \" Les apostrophe mais  nous orions pu échaper les giemée \" atention </br>  ";

echo "<h2> les comentaire /*comntaire */ //comentaire  # comantaire </h2>";

echo "<p> LES variables </p>";

$nomDepatement = "Var";
$chiffre = 83;
$pi = 3.14;
$vraix = true;
$faux = false;


echo '<br> '.$nomDepatement. '</br>';

echo $chiffre ;

echo '<p> La concataination: </p> <p>Exemple: <p> nom d\'un Departement de france : ' .$nomDepatement. 'la valeure arondie de PI :' .$pi. '</p>';

echo 'vraix:' .$vraix ;

echo '<br>faux' .$faux ;

?>
