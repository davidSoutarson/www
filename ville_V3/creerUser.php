<?php  require('inc_conextion.php');

if (!empty($_POST)) {
    extract($_POST);
    $valid = true;

    if (isset($_POST['inscription'])) {

      #gras extract recuperation et sinplifcation des variable
      $prenom ="";
       $nom = "";
       $pseudo = "";
       $email = "";
       $password = "";

     function secur($modif){
       $modif = (string) trim($modif);
       $modif = (string) stripslashes($modif);
       $modif = (string) strip_tags($modif);
       $modif = (string) htmlspecialchars($modif);
       return $modif;
       }

       $prenom = secur($_POST['prenom']);
       $nom = secur($_POST['nom']);
       $pseudo = secur($_POST['pseudo']);
       $email = secur($_POST['email']);
       $password = secur($_POST['password']);


         if ($valid) {
           session_start();

           $_SESSION['prenom'] = $prenom;
           $_SESSION['nom'] = $nom;
           $_SESSION['pseudo'] = $pseudo;


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
    <title>nouvelle Utilisateur</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <?php require('inc_menue.php');?>
    </header>
    <main>
      <h1> inscription nouvelle ulilisateure</h1>

      <div class="form_New_User">
        <form class="New_User" action="conexUser.php" method="post">

          <p>
            <label for="prenom">Tapez votre Prenom :</label>
             <input  id= "prenom" type="text" name="prenom" placeholder="prenom">
          </p>
          <p>
            <label for="nom">Tapez votre Nom :</label>
             <input  id= "nom" type="text" name="nom" placeholder="nom" >
          </p>
          <p>
            <label for="pseudo">Tapez votre Pseudo :</label>
             <input  id= "pseudo" type="text" name="pseudo" placeholder="pseudo" >
          </p>
          <p>
            <label for="email">Tapez votre email:</label>
             <input  id= "email" type="email" name="email" placeholder="nom.prenom@gmail.com" >
          </p>
          <p>
            <label for="mdp">Tapez votre Mots de passe:</label>
            <input  id="mdp" type="password" name="password" placeholder="mots de passe" >
          </p>



          <p> <input type="submit" name="inscription" value="s'inscrire"> </p>

        </form>
      </div>



      </div>




    </main>
  </body>
</html>
