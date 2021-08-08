<?php
session_start();
require 'admin_header.php';
require 'admin_menu.php';

require '../fonction/inp_secur_fonc.php';

//scrypt

$requet='SELECT * FROM admin_user';
$result = $mysqli->query($requet);


#si le Formulaire est envoyer
if (isset($_POST['connexion_admin'])) {
  $conecter = TRUE;

      $input_pseudo = securisation($_POST['input_admin_pseudo']);
      $input_loging = securisation($_POST['input_admin_email']);
      $input_password = sha1 ($_POST['input_admin_password']);

      echo $input_password;

#cette condition peut etre eclater verivier et genere de mesage erure ou succer
  if (!empty($_POST['input_admin_pseudo'])
    AND
    !empty($_POST['input_admin_email'])
    AND
    !empty($_POST['input_admin_password']) )
    {
        #losque tout le formulaire a ette conpler et soumie
      $requetad='SELECT * FROM admin_user WHERE admin_pseudo = "'.$input_pseudo.'"  AND admin_loging = "'.$input_loging.'" AND admin_password ="'.$input_password.'" ';
      $resultad = $mysqli->query($requetad);
      $row_conect2 = $resultad->num_rows;

        echo "<br>:teste valeur \$row_conet2 : ".$row_conect2 ;

      if ($row_conect2 == 1) {


        $mesage ="<p> Conection reusie: Bien venue sur l'espase administrateur ! </p> ";
        session_start();
        $_SESSION['admin_conectez'] = $mesage;
        $_SESSION['admin_conect_pseudo'] ="<p> Bomjour :". $input_pseudo ."</p>";
        $_SESSION['admin_conect_loging'] = '<p> votre email :'. $input_loging ."</p>";

        $_SESSION['conectez']= "";
        $_SESSION['conect_pseudo'] = "";
        $_SESSION['conect_loging'] = "";

        $_SESSION['compte_cree'] = "";
        $_SESSION['compt_nom'] = "";
        $_SESSION['compt_pseudo']="";
        $_SESSION['compt_maile']="";

        if ($conecter ) {
         header('location:index.php');
        }
      }else {
        $ereur="champs incorecte pseudo , maile ou mots de passe nom valide";
        $conecter = FALSE;
      }


    }else {
      $ereur = "tout les champs doive etre completer";
      $conecter = FALSE;
    }
  // code...
}

 ?>

<!-- afichage html -->

<div class="logot">
  <h1>administration</h1>
</div>

  <h2>admin Conection </h2>


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
        <input type="text" id="input_pseudo" name="input_admin_pseudo" value="" placeholder="Pseudo"> </p>
    </div>

    <div class="champ">
      <p> <label for="input_email">Taper votre Email :</label>
      <input type="email" id="input_email" name="input_admin_email" value="" placeholder="Email"> </p>
    </div>

    <div class="champ">
      <p> <label for="input_passwor">Taper votre Mots de passe :</label>
      <input type="text" id="input_passwor" name="input_admin_password" value="" placeholder="Mots de passe"> </p>
    </div>
    <div class="bouton">
      <input type="submit" name="connexion_admin" value="connexion">
  </div>
  </form>

<?php var_dump($_SESSION) ?>
    <?php var_dump($_POST) ?>
</article>

<?php require '../footeur.php'; ?>
