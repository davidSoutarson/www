<?php
//session_start();
require 'header.php';
require './fonction/inp_secur_fonc.php';
?>

<?php
//scrypt

$requet='SELECT * FROM user';
$result = $mysqli->query($requet);

if (isset($_POST['connexion'])) {

      var_dump($_POST);

      $input_pseudo =securisation($_POST['input_pseudo']);
      $input_loging =securisation($_POST['input_email']);
      $input_password = sha1($_POST['input_password']);
var_dump($_POST);

    $envoie = TRUE;

  if (!empty($_POST['input_pseudo'])
    AND
    !empty($_POST['input_email'])
    AND
    !empty($_POST['input_password']) )
    {
      $input_pseudo =securisation($_POST['input_pseudo']);
      $input_loging =securisation($_POST['input_email']);
      $input_password = sha1 ($_POST['input_password']);

      $requet='SELECT * FROM user WHERE pseudo = "'.$input_pseudo.'"  AND user_loging = "'.$input_loging.'" AND user_password ="'.$input_password.'" ';
      $result = $mysqli->query($requet);
      $row_conect = $result->num_rows;

      if ($row_conect == 1) {

        $mesage ="<p> Conection reusie: Bien venue  ! </p> ";
        session_start();
        $_SESSION['conectez'] = $mesage;
        $_SESSION['conect_pseudo'] ="<p> Bomjour :". $input_pseudo ."</p>";
        $_SESSION['conect_loging'] = '<p> votre email :'. $input_loging ."</p>";

        $_SESSION['compte_cree'] = "";
        $_SESSION['compt_nom'] = "";
        $_SESSION['compt_pseudo']="";
        $_SESSION['compt_maile']="";

        if ($envoie ) {
         header('location:index.php');
        }
      }else {
        $ereur="champs incorecte pseudo , maile ou mots de passe nom valide";
        $envoie = FALSE;
      }


    }else {
      $ereur = "tout les champs doive etre completer";
      $envoie = FALSE;
    }
  // code...
}

 ?>

<!-- afichage html -->

<div class="logot">
  <h1>image logot</h1>
</div>

<nav>
  <ul>
    <li> <a href="#"></a>Uilisateur </li>
    <p>si vous n'aver pas dejat un compte cliqez sur nouvelle utilisateure</p>
      <ul>
      <!--  <li>  <a href="index.php">teste go accueil</a>   </li> -->
        <li> <a href="new_user.php"> nouvelle Utilisateur</a> </li>
        <li> <a href="conection.php"> Ce conectez</a> </li>
      </ul>
    </li>
  </ul>
</nav>

  <h2> Formulaire de Conection </h2>


  <article class="">

    <div class="alert">

    <?php if (isset($ereur)) {
      echo $ereur ."<br>";
    } ?>

    <?php if (isset($mesage)) {
      echo $mesage."<br>";
    } ?>

    </div>

  <form class="form_gourp" action="" method="post">

    <div class="champ">
      <p> <label for="input_pseudo">Taper votre Pseudo :</label>
        <input type="text" id="input_pseudo" name="input_pseudo" value="" placeholder="Pseudo"> </p>
    </div>

    <div class="champ">
      <p> <label for="input_email">Taper votre Email :</label>
      <input type="email" id="input_email" name="input_email" value="" placeholder="Email"> </p>
    </div>

    <div class="champ">
      <p> <label for="input_passwor">Taper votre Mots de passe :</label>
      <input type="text" id="input_passwor" name="input_password" value="" placeholder="Mots de passe"> </p>
    </div>
    <div class="bouton">
      <input type="submit" name="connexion" value="connexion">
  </div>
  </form>

    <?php //var_dump($_POST) ?>
</article>

<?php require 'footeur.php'; ?>
