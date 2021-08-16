<?php
session_start(); //inisialisation de la session
echo $_SESSION['test'] ; //popagation'

echo $_SESSION['couleur'];

echo $_SESSION['prenom'];

echo $_SESSION['metier'];


echo "<p>-----------suite---------------</p>";

echo "<p>-----------popagation afectation---------------</p>";

$couleur = $_SESSION['couleur'];
echo  $couleur . "<br>"; // rouge


var_dump($_SESSION);

echo session_id(). ":: id de la session <br>";

echo "<br> on detruit la setion <br>";
session_destroy();

 ?>
 <br>
<a href="page_a.php">lien ver la page_A</a>
