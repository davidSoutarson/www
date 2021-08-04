<?php
require 'menu.php';
//require 'header.php'; //quand terminer
require './fonction/inp_secur_fonc.php';
?>

<?php
$requet= 'SELECT * FROM user ';
    $result = $mysqli->query($requet);

   while ($row = $result-> fetch_array(MYSQLI_BOTH)){
     $BD_id = $row['user_id'];
     $BD_nom = $row['nom'];
     $BD_prenom = $row['prenom'];
     $BD_pseudo = $row['pseudo'];
     $BD_loging = $row['user_loging'];
     $BD_password = $row['user_password'];

     $user_nom_id[$BD_id] = $BD_nom;
     $user_prenom_id[$BD_id] = $BD_prenom;
     $user_pseudo_id[$BD_id] = $BD_pseudo;
     $user_loging_id[$BD_id] = $BD_loging;
     $user_password_id[$BD_id] = $BD_password;
   }
?>
<?php




var_dump($_POST);

#si le Formulaire est envoyer
  if (isset($_POST['valider'])){


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
         $input_nom =securisation($_POST['input_nom']);
         $input_prenom =securisation($_POST['input_prenom']);
         $input_pseudo =securisation($_POST['input_pseudo']);
         $input_loging =securisation($_POST['input_loging']);
         $input_loging2 =securisation($_POST['input_loging2']);
         $input_password =sha1 ($_POST['input_password']);
         $input_password2 =sha1 ($_POST['input_password2']);

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

                        if ($input_password == $input_password2) {
                          $requet2 = 'INSERT INTO user (nom,prenom,pseudo,user_loging,user_password) VALUES ("'. $input_nom .'","'. $input_prenom .'","'. $input_pseudo .'","'. $input_loging .'","'. $input_password .'")' ;
                          $result2 = $mysqli->query( $requet2 );
                          $mesage = "voutre compte a bien été crée ! ";
                           }else {
                             $ereur = "veau mots de passe ne coresponde pas !";
                           }

                        }else {
                          $ereur ="votre email nes pas valide !";
                        }
                      }else {
                            $ereur = "veau aderse Email ne coresponde pas !";
                          }


                }  else {
                $ereur = "votre Email ne doit depasser 50 caractéres !";
                }

     }else {
         $ereur = "tout les champs doive etre completer !";
       }
}

 ?>

<!-- afichage html -->

  <h2> Formulaire d'insription </h2>

<article class="">

  <div class="alert">
<p>____________________________________________</p>
  <?php if (isset($ereur)) {
    echo $ereur;
  } ?>

  <?php if (isset($mesage)) {
    echo $mesage;
  } ?>
<p>________________________________________</p>

  <form class="" action="" method="post">


    </div>

    <div class="form_gour">
        <p> <label for="input_nom">Taper votre Nom :</label>
         <input type="text"
                id="input_nom"
                name="input_nom"
                <?php if (isset($input_nom)): ?>
                        <?php echo "value='".$input_nom."'" ?>
                        <?php endif; ?>
                placeholder="Nom"> </p>

    </div>


    <div class="form_gour">
        <label for="input_prenom">Taper votre Prenom :</label>
        <input type="text"
              id="input_prenom"
              name="input_prenom"
              <?php if (isset($input_prenom)): ?>
                    <?php echo "value='".$input_prenom."'" ?>
                    <?php endif; ?>
             placeholder="Prenom"></p>

   </div>


    <div class="form_gour">
        <label for="input_pseudo">Taper votre Pseudo :</label>
        <input type="text"
                id="input_pseudo"
                name="input_pseudo"
                <?php if (isset($input_pseudo)): ?>
                        <?php echo "value='".$input_pseudo."'" ?>
                        <?php endif; ?>
                placeholder="Pseudo"></p>

    </div>


    <div class="form_gour">
        <label for="input_loging">Taper votre Email :</label>
        <input type="email"
                id="input_loging"
                name="input_loging"
                <?php if (isset($input_loging)): ?>
                       <?php echo "value='".$input_loging."'" ?>
                       <?php endif; ?>
                placeholder="Email"></p>

    </div>

    <div class="form_gour">
        <label for="input_loging">Confirmer votre Email :</label>
        <input type="email"
                id="input_loging"
                name="input_loging2"
                <?php if (isset($input_loging2)): ?>
                       <?php echo "value='".$input_loging."'" ?>
                       <?php endif; ?>
                placeholder="Email"></p>

    </div>



    <div class="form_gour">
        <label for="input_password">Taper votre Mots de passe :</label>
        <input type="text"
                id="input_password"
                name="input_password"
                value=""
                placeholder="Mots de passe"></p>

    </div>

    <div class="form_gour">
        <label for="input_password">Comfirmer votre Mots de passe :</label>
        <input type="text"
                id="input_password"
                name="input_password2"
                value=""
                placeholder="Mots de passe"></p>

    </div>



    <div class="">
      <input type="submit" name="valider" value="valider">
    </div>

  </form>

</article>



<?php require 'footeur.php'; ?>
