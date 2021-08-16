<?php
$alerte = null;
if (!empty($_POST)) {
$valid = ture;
  if ( !empty($_POST['pseudo'])
    && !empty($_POST['user_email'])
    && !empty($_POST['password'] )) {

      if ( $_POST['pseudo'] === 'DS'
          && $_POST['user_email'] === 'triplaxs@gmail.com'
          && $_POST['password'] === '123' ){
            session_start();
            $_SESSION['connecte'] = 1 ;

            header('Location: index.php');
          }else {
            $alerte = "identification incorecte";
      }
    }
}
 require('inc_conextion.php');
//declaration variable vide


?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="./image/icon.ico">
    <title>conextion</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>


    <main>
      <h1>Conextion Utilisateur</h1>

      <div class="form_New_User">
        <form class="New_User" action="conextion.php" method="post">
          <?php if ($alerte): ?>
            <p class="danger">
            <?= $alerte ?>
            </p>
          <?php endif; ?>

            <label for="pseudo">Tapez votre Pseudo :</label>
             <input  id= "pseudo" type="text" name="pseudo" placeholder="Nom dutilisateur" >
          </p>
          <p>
            <label for="email">Tapez votre email:</label>
             <input  id= "email" type="email" name="user_email" placeholder="nom.prenom@gmail.com" >
          </p>

          <p>
            <label for="mdp">Tapez votre Mots de passe:</label>
            <input  id="mdp" type="password" name="password" placeholder="mots de passe" >
          </p>

          <p> <input type="submit" name="inscription" value="conncter"> </p>

        </form>
      </div>
      <div >

      </div>
    </main>
  </body>
</html>
