<?php  require('inc_conextion.php'); ?>

<?php if (isset($_POST['valider'])) {
  $valider = $_POST['valider'];
  $mdp = $_POST['mdp'];
  $comfimez_mdp = $_POST['comfimez_mdp'];
  $mesage = "verifier vaux information";
  require('inc_fonction.php');
}

if (empty($prenom)) {
  $mesage1 = "<p class='atention'> champ Prenom n'est pas remplie </p>";
} else {
  $mesage1 = "<p class = 'ok'> Ton prenom est :".$prenom. " </p>";
}


if (empty($nom)) {
  $mesage2 = "<p class='atention'> champ Nom n'est pas remplie </p>";
} else {
  $mesage2 = "<p class = 'ok'> Ton nom est :".$nom. " </p>";
}

if (empty($speudo)) {
  $mesage3 = "<p class ='atention'> champ Speudo n'est pas remplie </p>";
} else {
  $mesage3 = "<p class = 'ok'> Ton Speudo est :".$speudo. " </p>";
}

if (empty($email)) {
  $mesage4 = "<p class='atention'> champ email n'est pas remplie </p>";
} else {
  $mesage4 = "<p class = 'ok'> Ton email est :".$email. " </p>";
}

if (empty($mdp)) {
  $mesage5 = "<p class='atention'> champ Mots de passe n'est pas remplie </p>";
}


if (empty($comfimez_mdp)) {
  $mesage6 = "<p class='atention'> champ Comfimez most n'est pas remplie </p>";
  if( (!empty($comfimez_mdp)) AND (!empty($mdp)) ){
    if ($comfimez_mdp == $mdp){
      $mesage6 = "<p class='ok'> champ Comfimez est Mots de passe OK </p>";
    }else {
      $mesage6 = "<p> les champ mot de passe et Comfimez ne som pas identique </p>";
    }
  }

}


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
      <h1> nouvelle ulilisateure</h1>

      <div class="form_New_User">
        <form class="New_User" action="conexUser.php" method="post">

          <p>
            <label for="prenom">Tapez votre Prenom :</label>
             <input  id= "prenom" type="text" name="prenom" autocomplete="off" placeholder="prenom" >
          </p>
          <p>
            <label for="nom">Tapez votre Nom :</label>
             <input  id= "nom" type="text" name="nom"  placeholder="nom" >
          </p>
          <p>
            <label for="pseudo">Tapez votre Pseudo :</label>
             <input  id= "pseudo" type="text" name="pseudo"  placeholder="pseudo" >
          </p>
          <p>
            <label for="email">Tapez votre email:</label>
             <input  id= "email" type="email" name="email"  placeholder="nom.prenom@gmail.com" >
          </p>
          <p>
            <label for="mdp">Tapez votre Mots de passe:</label>
            <input  id="mdp" type="password" name="mdp" placeholder="mots de passe" >
          </p>
          <p>
            <label for="comfimez_mdp">Confirmez votre Mots de passe:</label>
            <input  id="comfimez_mdp" type="password" name="comfimez_mdp" placeholder="mots de passe" >
          </p>

          <p> <input type="submit" name="valider" value="valider" > </p>

        </form>
      </div>
      <?php if (isset($valider)): ?>
        <div class="reponse_form">
        <p>votre prenon est : <?php echo $prenom; ?></p>
        <p>votre non est : <?php echo $nom; ?></p>
        <p>votre speudo est : <?php echo $pseudo; ?></p>
        <p>votre email est : <?php echo $email; ?></p>
        <p> <?php echo $mesage; ?> </p>
        </div>
      <?php endif; ?>

      <div class="alerte">
        <?php

          echo "<br>". $mesage1 ."<br>";
          echo "<br>". $mesage2 ."<br>";
          echo "<br>". $mesage3 ."<br>";
          echo "<br>". $mesage4 ."<br>";
          echo "<br>". $mesage5 ."<br>";
          echo "<br>". $mesage6 ."<br>";
          ?>
      </div>




    </main>
  </body>
</html>
