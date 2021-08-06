<?php
session_start(); //inisialisation de la session
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


      <?php
         echo $_SESSION['compte_cree'];
         echo"<p> Bomjour :".$_SESSION['compt_nom'] ."</p>";
         echo"<p> pseudo utilisateure :". $_SESSION['compt_pseudo'] ."</p>";
         echo'<p> votre email :' .$_SESSION['compt_maile'] .'</p>';
         
         var_dump($_SESSION)
      ?>

  </article>



<?php require 'footeur.php';?>
