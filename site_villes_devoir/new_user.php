<?php
require 'menu.php';
require './fonction/inp_secur_fonc.php';
?>
<?php
$row = [""];
$result = [""];

/*$inp_nom = "";
$inp_prenom = "";
$inp_pseudo = "";
$inp_loging = "";
$inp_password = "";*/

/*
$bd_id ="";
$bd_nom = "";
$bd_prenom = "";
$bd_pseudo = "";
$bd_loging = "";
$bd_password = "";
*/

$alert = "";

$mesage="";

$ok="";

$requet='SELECT user_id,nom
                ,prenom
                ,pseudo
                ,user_loging
                ,user_password FROM user';
$result = $mysqli->query($requet);

if (isset($_POST['valider'])) {
   $ok = 1 ;

   if ( empty($_POST['input_nom'])
        AND
        empty($_POST['input_prenom'])
        AND
        empty($_POST['input_pseudo'])
        AND
        empty($_POST['input_loging'])
        AND
        empty($_POST['input_password'])
      ) {
            $alert = "Sesiser vaut information ";
            $ok= 0;
        }else {
          // code...
                    if ( isset($_POST['input_nom']) AND ! empty($_POST['input_nom'])
                        OR
                        isset($_POST['input_prenom']) AND ! empty($_POST['input_pnom'])
                        OR
                        isset($_POST['input_pseudo']) AND ! empty($_POST['input_pseudo'])
                        OR
                        isset($_POST['input_loging']) AND ! empty($_POST['input_loging'])
                        OR
                        isset($_POST['input_passwor']) AND ! empty($_POST['input_passwor'])
                          ) {
                            $inp_nom = securisation($_POST['input_nom']);
                            $inp_prenom = securisation($_POST['input_prenom']);
                            $inp_pseudo = securisation($_POST['input_pseudo']);
                            $inp_loging = securisation($_POST['input_loging']);
                            $inp_password = $_POST['input_password'];


                            echo $inp_nom ."<br>"
                               . $inp_prenom . "<br>"
                               . $inp_pseudo . "<br>"
                               . $inp_loging . "<br>"
                               . $inp_password . "<br>";
                          }
        }
}



######################################


  $requet='SELECT user_id,nom,prenom,pseudo,user_loging,user_password FROM user';
  $result = $mysqli->query($requet);

  while ($row = $result-> fetch_array())

      {
        $bd_id =  $row ['user_id'];
        $bd_nom = $row['nom'];
        $bd_prenom = $row['prenom'];
        $bd_pseudo = $row['pseudo'];
        $bd_loging = $row['user_loging'];
        $bd_password = $row['user_password'];

        $bd_user_nom[$bd_id] = $bd_nom;
        $bd_user_prenom[$bd_id] = $bd_prenom;
        $bd_user_pseudo[$bd_id] = $bd_pseudo;
        $bd_user_log[$bd_id] = $bd_loging;
        $bd_user_pase[$bd_id] = $bd_password;

        $bd_user_id[$bd_id] = $bd_id;
      }


  $requet_ecritur= 'INSERT INTO user (nom,prenom,pseudo,user_loging,user_password) VALUES ("'.$inp_nom.'","'.$inp_prenom.'","'.$inp_pseudo.'","'.$inp_loging.'","'. $inp_password .'")';
  $result_ecritur = $mysqli->query($requet_ecritur);





 ?>

<!-- afichage html -->

  <h2> Formulaire d'insription </h2>

<article class="">

  <form class="" action="" method="post">

    <div class="form_gour">
        <p> <label for="input_nom">Taper votre Nom :</label>
         <input type="text" id="input_nom" name="input_nom" value="" placeholder="Nom"> </p>
        <p class="rouge"> <?php echo $alert; ?> </p>
    </div>


    <div class="form_gour">
        <label for="input_prenom">Taper votre Prenom :</label>
        <input type="text" id="input_prenom" name="input_prenom" value="" placeholder="Prenom">
        <p class="rouge"><?php echo $alert ; ?> </p>
   </div>


    <div class="form_gour">
        <label for="input_pseudo">Taper votre Pseudo :</label>
        <input type="text" id="input_pseudo" name="input_pseudo" value="" placeholder="Pseudo">
        <p class="rouge"><?php echo $alert ; ?> </p>
    </div>


    <div class="form_gour">
        <label for="input_email">Taper votre Email :</label>
        <input type="email" id="input_email" name="input_loging" value="" placeholder="Email">
        <p class="rouge"><?php echo $alert ; ?> </p>
    </div>



    <div class="form_gour">
        <label for="input_passwor">Taper votre Mots de passe :</label>
        <input type="text" id="input_passwor" name="input_password" value="" placeholder="Mots de passe">
        <p class="rouge"><?php echo $alert ; ?> </p>
    </div>

        <input type="hidden"  name="input_time" value="<?php echo date('Y-m-d H:i:s'); ?>" >

    <div class="">
      <input type="submit" name="valider" value="valider">
    </div>

  </form>

  <div class="">
    <p> <?php echo $mesage; ?></p>

  </div>

</article>

<?php require 'footeur.php'; ?>
