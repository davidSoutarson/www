<?php
echo('hello World');//je suis un comentaire
echo "le ficher index.php et le premier a etre lu ";#je suis un comantaire
echo 'Le php c\'est sympa';/*je suis comantaire*/

/*un bloc de
comentaire
la la la la
ou encor la la
aces rigoler */
echo " fin des comentaire"; #les instuction finse par un point vergule
$jour="lundi ";
echo " $jour";
$jour=" mardi";
echo "$jour";

$saison=" été ";
echo " $saison";// afiche été

$number= 3;
$saved = $number;
echo "$saved";
$number =3 + 1;
echo " $number ";
echo " $saved ";
echo "<br/>";
/* les constente */
define('HOME', 'index.php');
echo '<a href="' . HOME .'">Accueil</a>';
?>
