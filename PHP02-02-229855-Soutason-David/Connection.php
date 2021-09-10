<?php
require 'header.php';

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

   if (!empty($input_nom)
   AND
    !empty($input_prenom)
   AND
    !empty($input_email)
   AND
    !empty($input_password)) {

      $requet= 'SELECT * FROM clients WHERE nom_client = "'.$input_nom.'" AND prenom_client = "'.$input_prenom.'" AND email_client = "'.$input_email.'" AND passeword_client = "'.$input_password.'" ';
       $result = $mysqli->query($requet);

       $row_conect = $result->num_rows;

      if($row_conect == 1){
          $mesage= "Conection reusie";
        while ($row = $result-> fetch_array(MYSQLI_BOTH))
            {
              $BD_nom = $row['nom_client'];
              $BD_prenom = $row['prenom_client'];
              $BD_email = $row['email_client'];
              $BD_client_id = $row['id_client'];
            }


        session_start();
          $_SESSION['info_client'] = $BD_client_id."<br>".$BD_prenom."<br>".$BD_nom."<br>".$BD_email;


      }else {
        $mesage= "echec conection";
      }

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
