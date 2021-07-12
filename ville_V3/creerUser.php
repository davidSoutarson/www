<?php  require('inc_conextion.php');
//declaration variable vide
$message_prenom ='';
$message_nom ='';
$message_pseudo ='';
$message_user_email ='';
$message_password='';
$alerte= '';


if (!empty($_POST)) {
    extract($_POST);
    $valid = true;

    if (isset($_POST['inscription'])) {

      #gras extract recuperation et sinplifcation des variable
      $prenom ="";
       $nom = "";
       $pseudo = "";
       $user_email = "";
       $password = "";

     function secur($modif){
       $modif =  trim($modif);
       $modif =  stripslashes($modif);
       $modif =  strip_tags($modif);
       $modif =  htmlspecialchars($modif);
       return $modif;
       }

       $prenom = secur($_POST['prenom']);
       $nom = secur($_POST['nom']);
       $pseudo = secur($_POST['pseudo']);
       $user_email = secur($_POST['user_email']);
       $password = secur($_POST['password']);

        $result = $mysqli->query('SELECT user_id, nom, prenom, speudo, user_login, user_password FROM user');

         $row= $result->fetch_array();

         if (empty($prenom)) {
           $valid = false;
           $message_prenom = '<p class="atention">veuillez resenier le champ Prenom !</p>';
           $alerte = '<p class="danger"> Le formulaire d\'inscription na éte envoyer !</p> ';
         } else {
           $alerte = '<p class= "ok"> Le formulaire a éte  envoyer </p>';
         }
         if (empty($nom)) {
           $valid = false;
            $message_nom = '<p class="atention">veuillez resenier le champ nom !</p>';
            $alerte = '<p class="danger"> Le formulaire d\'inscription na éte envoyer !</p> ';
         }else {
           $alerte = '<p class= "ok"> Le formulaire a éte  envoyer </p>';
         }
         if (empty( $pseudo)) {
           $valid = false;
            $message_pseudo = '<p class="atention">veuillez resenier le champ speudo !</p>';
            $alerte = '<p class="danger"> Le formulaire d\'inscription na éte envoyer !</p> ';
         }else {
           $alerte = '<p class= "ok"> Le formulaire a éte  envoyer </p>';
         }
         if (empty( $user_email)) {
           $valid = false;
            $message_user_email = '<p class="atention">veuillez resenier le champ email !</p>';
            $alerte = '<p class="danger"> Le formulaire d\'inscription na éte envoyer !</p> ';
         }else {
           $alerte = '<p class= "ok"> Le formulaire a éte  envoyer </p>';
         }

         if (empty( $password )) {
           $valid = false;
            $message_password = '<p class="atention">veuillez resenier le champ mots de passe !</p>';
            $alerte = '<p class="danger"> Le formulaire d\'inscription na éte envoyer ! </p>';
         }else {
           $alerte = '<p class= "ok"> Le formulaire a éte  envoyer </p>';
         }


         if ($valid) {
           session_start();
           $_SESSION['$user_email'] = $user_email;
           $_SESSION['prenom'] = $prenom;
           $_SESSION['nom'] = $nom;
           $_SESSION['pseudo'] = $pseudo;

           $mysqli->query( 'INSERT INTO  user ( nom, prenom, speudo, user_login, user_password )
           VALUES
           ("'.$nom.'","'.$prenom.'","'.$pseudo.'","'.$user_email.'","'.$password.'") ');

           $result = $mysqli->query('SELECT user_id, nom, prenom, speudo, user_login, user_password FROM user');



         }
    }
}

//David
//Soutarson
//DS
// triplaxs@gmail.com
//amoure2020
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="./image/icon.ico">
    <title> nouvelle Utilisateur</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <?php require('inc_menue.php');?>
    </header>
    <main>
      <h1> inscription nouvelle ulilisateure</h1>

      <div class="form_New_User">
        <form class="New_User" action="creerUser.php" method="post">

          <p>
            <label for="prenom">Tapez votre Prenom :</label>
             <input  id= "prenom" type="text" name="prenom" <?php if (isset($prenom)): ?>
               value ="<?php echo $prenom ?>"
             <?php endif; ?>  placeholder="prenom">
          </p>
            <?php echo $message_prenom; ?>
          <p>
            <label for="nom">Tapez votre Nom :</label>
             <input  id= "nom" type="text" name="nom" <?php if (isset($nom)): ?>
               value="<?php echo $nom ?>"
             <?php endif; ?> placeholder="nom" >
          </p>
              <?php echo $message_nom; ?>
          <p>
            <label for="pseudo">Tapez votre Pseudo :</label>
             <input  id= "pseudo" type="text" name="pseudo" placeholder="pseudo" >
          </p>
            <?php echo $message_pseudo; ?>
          <p>
            <label for="email">Tapez votre email:</label>
             <input  id= "email" type="email" name="user_email" placeholder="nom.prenom@gmail.com" >
          </p>
          <?php echo $message_user_email; ?>
          <p>
            <label for="mdp">Tapez votre Mots de passe:</label>
            <input  id="mdp" type="password" name="password" placeholder="mots de passe" >
          </p>
            <?php echo $message_password; ?>


          <p> <input type="submit" name="inscription" value="s'inscrire"> </p>
          <?php echo $alerte; ?>

        </form>
      </div>

      <div class="">






      </div>






    </main>
  </body>
</html>
