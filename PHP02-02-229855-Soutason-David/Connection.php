<?php
require 'header.php';
#id_client
#nom_cilent
#prenom_client
#email_client
#passeword_client

if (isset($_POST['envoyer'])) {

  if (!empty($_POST['input_nom'])) {
    $input_nom =($_POST['input_nom']);
  } else {
    $ereur_nom = "le champ nom doit etre remplie";
    $ereur = "Tout les champ doive etre remplie";
  }

  if (!empty($_POST['input_prenom'])) {
      $input_prenom =($_POST['input_prenom']);
  } else {
    $ereur_prenom = "le champ prenom doit etre remplie";
    $ereur = "Tout les champ doive etre remplie";
  }

  if (!empty($_POST['input_email'])) {
    $input_email =($_POST['input_email']);
  } else {
    $ereur_email = "le champ email doit etre remplie";
    $ereur = "Tout les champ doive etre remplie";
  }



  if (!empty($_POST['input_password'])) {
    $input_password =sha1 ($_POST['input_password']);
  } else {
    $ereur_password = "le champ Mot de passe doit etre remplie";
    $ereur = "Tout les champ doive etre remplie";
  }


}


?>
<title>Connection</title>
</head>
<body>

  <?php  require 'menu.php';  ?>

  <main>
    <h1>Connection</h1>

    <article class="presentation">


      <form class="client" action="" method="post">
        <p>connection client</p>

        <div class="alert">

        <?php if (isset($ereur)) {
          echo $ereur ."<br>";
        } ?>

        <?php if (isset($mesage)) {
          echo $mesage."<br>";
        } ?>

    

        </div>

        <p>
          <label for="input_nom">Nom</label>
          <input id="input_nom" type="text" name="input_nom" value="" placeholder="Nom">

          <?php if (isset($ereur_nom)) {
            echo "<p class= 'ereur' >". $ereur_nom ."</p>";
          } ?>
        </p>

        <p>
          <label for="input_prenom">Prenom</label>
          <input id="input_prenom" type="text" name="input_prenom" value="" placeholder="Prenom">

          <?php if (isset($ereur_prenom)) {
            echo "<p class= 'ereur' >". $ereur_prenom ."</p>";
          } ?>
        </p>

        <p>
          <label for="input_email">Email</label>
          <input id="input_email" type="email" name="input_email" value="" placeholder="email">

          <?php if (isset($ereur_email)) {
            echo "<p class= 'ereur' >".$ereur_email ."</p>";
          } ?>
        </p>

        <p>
          <label for="input_password">Mot de passe</label>
          <input id="input_password" type="password" name="input_password" value="" placeholder="mots de passe">

          <?php if (isset($ereur_password)) {
            echo "<p class= 'ereur' >".$ereur_password ."</p>";
          } ?>
        </p>

        <input class="bouton" type="submit" name="envoyer" value="valider">

      </form>

    </article>
  </main>

  <?php  require 'footeur.php';  ?>
