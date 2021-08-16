<?php require('fonction_bdd.php') ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <a href="fonction_bdd.php">teste fonction</a>

      <p>afichage de l'aire 10*20</p>
      <p>afichage en 'dur' </p>
      <?php echo $aire ?>

<!--___________________voicie une fason de faire __________________ -->
      <p>afichage de l'aire variable </p>
      <p>avec la recuperation des variables l, L ; d'un petit fomnulaire</p>
      <form class="" action="index.php" method="post">

      <input id= 'l' type="text" name="l" value="" placeholder="largeur">
      <input id= 'L' type="text" name="L" value="" placeholder="Longueur">
      <input type="submit" name="envoyer" value="envoyer">
      <br>
      <?php echo $bouton_envoyer.":ce bouton et aficcher grase a une fonction" ?>
    </form>
      <?php //verification de lanvoie du formulaire
      if (isset($_POST['envoyer']))
      {
      $l = $_POST['l'];
      $L = $_POST['L'];
      $largeur = $l;
      $longueur =$L;
      }
      ?>
      <?php
      $aire = aire($largeur,$longueur);
      echo $aire;
     ?>
<!--___________________voicie une autre fason de faire __________________ -->
<h2>metod 2</h2>
<p>le fomulaire et conposer de plusire fonction</p>
<form class="" action="index.php" method="post">
  <?php echo $formParallélogramme ?>
  <?php echo $bouton_envoyer ?>
</form>



<?php //verification de lanvoie du formulaire
if (isset($_POST['envoyer']))
{
$l = $_POST['l'];
$L = $_POST['L'];
$largeur = $l;
$longueur =$L;
}
?>

<p>resulat : perimetre</p>
<?php
$perimetre = perimetre($largeur,$longueur);
echo $perimetre ?>
<p>resulat : aire</p>
<?php
  $aire = aire($largeur,$longueur);
  echo $aire

  ?>
  <style>
  div {
    margin: 0px auto;
    width:<?php echo $l."mm"; ?>;
    height: <?php echo $L."mm"; ?>;
    border: 1px solid red;
    padding: 0px;
    box-sizing: border-box;
    background-color: #C0C0C0;
  }
  </style>

  <div>
  </div>
<p>_____________au desu afichage de la figure corepondent:_________au desu afichage de la figure corepondent:___________</p>
  </body>
</html>
