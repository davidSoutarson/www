<?php
session_start();
require 'admin_header.php';
require 'admin_menu.php';

require '../fonction/inp_secur_fonc.php';

//scrypt

$requet= 'SELECT * FROM admin_user ';
$result = $mysqli->query($requet);


//declaration de variable de verification
$mailexist = FALSE;
$pseudoexist = FALSE;
$Mpassexist = FALSE;

//var_dump($_POST);

#si le Formulaire est envoyer
  if (isset($_POST['valider'])){
      $envoie = TRUE;

      $input_nom =securisation($_POST['input_nom']);
      $input_prenom =securisation($_POST['input_prenom']);
      $input_pseudo =securisation($_POST['input_pseudo']);
      $input_loging =securisation($_POST['input_loging']);
      $input_loging2 =securisation($_POST['input_loging2']);
      $input_password =sha1 ($_POST['input_password']);
      $input_password2 =sha1 ($_POST['input_password2']);

#cette condition peut etre eclater verivier et genere de mesage erure ou succer
    if( !empty($_POST['input_nom'])
       AND
       !empty($_POST['input_prenom'])
       AND
       !empty($_POST['input_pseudo'])
       AND
       !empty($_POST['input_loging'])
       AND
       !empty($_POST['input_loging2'])
       AND
       !empty($_POST['input_password'])
       AND
       !empty($_POST['input_password2']) )
       {


            $nomlengh = strlen($input_nom);
              if ($nomlengh <= 20 ){
                // code...
                }
                else {
                  $ereur = "votre Nom ne doit depasser 20 caractéres !";
                }

                $prenomlengh = strlen($input_prenom);
                if ($prenomlengh <= 20 ){
                  // code...
                }
                else {
                  $ereur = "votre prenom ne doit depasser 20 caractéres !";
                }

                $pseudolengh = strlen($input_pseudo);
                if ($pseudolengh <= 20 ){
                // code...
                }else {
                $ereur = "votre Pseudo ne doit depasser 20 caractéres !";
                }

                $loginlentgh = strlen($input_loging);
                if ($loginlentgh <= 50) {

                  if ($input_loging == $input_loging2) {

                      if (filter_var($input_loging,FILTER_VALIDATE_EMAIL)) {

                          $requet2= 'SELECT COUNT(*) FROM admin_user WHERE admin_password =  "'.$input_password.'" ';
                          $result2 = $mysqli->query($requet2);

                            while ($row = $result2-> fetch_array(MYSQLI_BOTH))
                                {
                                  $Mpassexist = $row['COUNT(*)'];
                                }

                          $requet3= 'SELECT * FROM admin_user WHERE admin_loging =  "'.$input_loging.'" ';
                          $result3 = $mysqli->query($requet3);

                            while ($row = $result3-> fetch_array(MYSQLI_BOTH))
                                {
                                  $mailexist = $row['admin_loging'];
                                }

                          $requet4= 'SELECT * FROM admin_user WHERE  admin_pseudo = "'.$input_pseudo.'" ';
                          $result4 = $mysqli->query($requet4);

                            while ($row = $result4-> fetch_array(MYSQLI_BOTH))
                                {
                                  $pseudoexist = $row['admin_pseudo'];
                                }

                  if (!$pseudoexist) {
                    if (!$mailexist) {
                      if (!$Mpassexist) {

                          if ($input_password == $input_password2) {
                            if ($envoie) {
                              $requet2 = 'INSERT INTO admin_user (admin_nom,admin_prenom,admin_pseudo,admin_loging,admin_password) VALUES ("'. $input_nom .'","'. $input_prenom .'","'. $input_pseudo .'","'. $input_loging .'","'. $input_password .'")' ;
                              $result2 = $mysqli->query( $requet2 );
                              $requet= 'SELECT admin_nom, admin_pseudo, admin_loging FROM admin_user WHERE admin_nom = "'.$input_nom.'" AND admin_pseudo = "'.$input_pseudo.'" AND admin_loging = "'.$input_loging.'" ';
                              $result = $mysqli->query($requet);
                              while ($row = $result-> fetch_array(MYSQLI_BOTH))
                                  {
                                    $BD_nom = $row['admin_nom'];
                                    $BD_pseudo = $row['admin_pseudo'];
                                    $BD_emaile =$row['admin_loging'];
                                  }

                              $mesage ="<p> voutre compte administrateur a bien été crée ! </p> ";
                              session_start(); //-- creation de session pour envoi ou partage et il prix en compte
                              $_SESSION['admin_compte_cree'] = $mesage;
                              $_SESSION['admin_compt_nom'] ="<p> Bomjour :". $BD_nom ."</p>";
                              $_SESSION['admin_compt_pseudo'] = "<p> pseudo utilisateure :". $BD_pseudo ."</p>";
                              $_SESSION['admin_compt_maile'] = '<p> votre email :' . $BD_emaile ."</p>";

                              $_SESSION['conectez']= "";
                              $_SESSION['conect_pseudo'] = "";
                              $_SESSION['conect_loging'] = "";

                              if ($envoie ) {
                               header('location:index.php');
                              }

                            }

                            }else {
                                    $ereur = "veau mots de passe ne coresponde pas !";
                                  }


                       }else {
                         $ereur = "Votre mots de passe est déja utilisée !";
                         $envoie = FALSE;
                       }

                     }else {
                       $ereur = "Votre email est déja utilisée !";
                       $envoie = FALSE;
                     }

                  }else {
                    $ereur = "Votre pseudo est déja utilisée !";
                    $envoie = FALSE;
                  }
          }else {
                  $ereur ="votre email nes pas valide !";
                  $envoie = FALSE;                    }
  }else {
          $ereur = "Veaux aderse Email ne coresponde pas !";
          $envoie = FALSE;
        }


} else {
        $ereur = "votre Email ne doit depasser 50 caractéres !";
        $envoie = FALSE;
        }

}else {
        $ereur = "tout les champs doive etre completer !";
        $envoie = FALSE;
      }

}

 ?>

<!-- afichage html -->

<div class="logot">
  <h1>administration</h1>
</div>



  <h2> admin idantification  </h2>

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
        <p> <label for="input_nom">Taper votre Nom :</label>
         <input type="text" id="input_nom" name="input_nom"
         <?php if (isset($input_nom)): ?>
         <?php echo "value='".$input_nom."'" ?>
         <?php endif; ?> placeholder="Nom"> </p>

    </div>

    <div class="champ">
        <label for="input_prenom">Taper votre Prenom :</label>
        <input type="text" id="input_prenom" name="input_prenom"
        <?php if (isset($input_prenom)): ?>
        <?php echo "value='".$input_prenom."'" ?>
        <?php endif; ?>placeholder="Prenom"> </p>
   </div>

    <div class="champ">
        <label for="input_pseudo">Taper votre Pseudo :</label>
        <input type="text" id="input_pseudo" name="input_pseudo"
        <?php if (isset($input_pseudo)): ?>
        <?php echo "value='".$input_pseudo."'" ?>
        <?php endif; ?>placeholder="Pseudo"></p>
    </div>

    <div class="champ">
        <label for="input_loging">Taper votre Email :</label>
        <input type="email" id="input_loging" name="input_loging"
        <?php if (isset($input_loging)): ?>
        <?php echo "value='".$input_loging."'" ?>
        <?php endif; ?>placeholder="Email"></p>

    </div>

    <div class="champ">
        <label for="input_loging2">Confirmer votre Email :</label>
        <input type="email" id="input_loging2" name="input_loging2"
        <?php if (isset($input_loging2)): ?>
        <?php echo "value='".$input_loging."'" ?>
        <?php endif; ?>placeholder="Email"></p>
    </div>

    <div class="champ">
        <label for="input_password">Taper votre Mots de passe :</label>
        <input type="text" id="input_password" name="input_password" value="" placeholder="Mots de passe"></p>
    </div>

    <div class="champ">
        <label for="input_password">Comfirmer votre Mots de passe :</label>
        <input type="text" id="input_password" name="input_password2" value="" placeholder="Mots de passe"></p>
    </div>

    <div class="bouton">
      <input type="submit" name="valider" value="valider">
    </div>

  </form>

</article>



<?php require '../footeur.php'; ?>
