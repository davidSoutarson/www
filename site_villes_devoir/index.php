<?php
require 'header.php';
require 'menu.php';

?>

<?php
$requet='SELECT prenom,nom FROM user';
$result = $mysqli->query($requet);


 ?>

  <!-- afichage html -->
<?php
  require 'bar_de_recherche.php';
 ?>


  <h2>page accueil</h2>


  <article class="">

    <p> Bomjour et bien venue sur le site des ville . Bonne visite :</p>

    <p> Salutation personaliser !!!</p>

    <p> Proposion de recher personaliser !!!</p>

  </article>



<?php require 'footeur.php';?>
