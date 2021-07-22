<?php
require 'menu.php';
?>

<?php

$requet='SELECT prenom,nom FROM user';
$result = $mysqli->query($requet);
 ?>

<!-- afichage html -->

  <h2> Formulaire d'insription </h2>

<article class="">

  <form class="" action="" method="post">

    <p> <label for="input_nom">Taper votre Nom :</label>
     <input type="text" id="input_nom" name="input_nom" value="" placeholder="Nom"> </p>
    <p class=""> </p>

    <p> <label for="input_prenom">Taper votre Prenom :</label>
     <input type="text" id="input_prenom" name="input_prenom" value="" placeholder="Prenom"> </p>
    <p class=""> </p>

    <p> <label for="input_pseudo">Taper votre Pseudo :</label>
     <input type="text" id="input_pseudo" name="input_pseudo" value="" placeholder="Pseudo"> </p>
    <p class=""> </p>

    <p> <label for="input_email">Taper votre Email :</label>
     <input type="email" id="input_email" name="input_email" value="" placeholder="Email"> </p>
    <p class=""> </p>


    <p> <label for="input_passwor">Taper votre Mots de passe :</label>
    <input type="text" id="input_passwor" name="input_passwor" value="" placeholder="Mots de passe"> </p>
    <p class=""> </p>

    <input type="submit" name="valider" value="valider">

  </form>

</article>

<?php require 'footeur.php'; ?>
