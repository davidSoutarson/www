<?php  require('inc_conextion.php'); ?>
<?php
  if (isset($_POST['valider'])) {
    // code...
    if (!empty($_POST['prenon']) AND !empty($_POST['mdp'])) {
      // code...
    }else {
      // code...
      echo "Veuillez completer tout les champs";
    }
  }

 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>nouvelle Utilisateur</title>
  </head>
  <body>
    <header>
      <?php require('inc_menue.php');?>
    </header>
    <main>
      <h1> nouvelle ulilisateure</h1>

  

      <div class="form_New_User">
        <form class="New_User" action="conexUser.php" method="post">

          <p> <input type="text" name="prenon" autocomplete="off" > </p>
          <p> <input type="password" name="prenon" > </p>
          <p> <input type="submit" name="valider" > </p>

        </form>
      </div>

    </main>
  </body>
</html>
