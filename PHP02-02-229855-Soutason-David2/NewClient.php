<?php
require 'in_conetion_BD.php';
require 'header.php';
#id_client
#nom_cilent
#prenom_client
#email_client
#passeword_client

$emailExist = FALSE;
$passExist = FALSE;

if (isset($_POST['valider'])) {

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

  if (!empty($_POST['input_conf_email'])) {
    $input_conf_email =($_POST['input_conf_email']);
  } else {
    $ereur_conf_email = "le champ Confimer vautre Email doit etre remplie";
    $ereur = "Tout les champ doive etre remplie";
  }

  if (!empty($_POST['input_password'])) {
    $input_password =sha1 ($_POST['input_password']);
  } else {
    $ereur_password = "le champ Mot de passe doit etre remplie";
    $ereur = "Tout les champ doive etre remplie";
  }

  if (!empty($_POST['input_conf_password'])) {
    $input_conf_password =sha1 ($_POST['input_conf_password']);
  } else {
    $ereur_conf_password = "le champ Confimer mot de passe doit etre remplie";
    $ereur = "Tout les champ doive etre remplie";
  }

  if( !empty($_POST['input_nom'])
  AND
  !empty($_POST['input_prenom'])
  AND
  !empty($_POST['input_email'])
  AND
  !empty($_POST['input_conf_email'])
  AND
  !empty($_POST['input_password'])
  AND
  !empty($_POST['input_conf_password']) ) { #si le Formulaire et totalememt remplie

    if ($input_email == $input_conf_email) { #controle maile identique

      if (filter_var($input_email,FILTER_VALIDATE_EMAIL)) { #controle email valide

        #cretion variable emailExite passwordExite

        $requet1= 'SELECT * FROM clients WHERE email_client =  "'.$input_email.'" ';
        $result1 = $mysqli->query($requet1);

        while ($row = $result1-> fetch_array(MYSQLI_BOTH))
        {
          $emailExist = $row['email_client'];
        }

        $requet2= 'SELECT COUNT(*) FROM clients WHERE passeword_client =  "'.$input_password.'" ';
        $result2 = $mysqli->query($requet2);

        while ($row = $result2-> fetch_array(MYSQLI_BOTH))
        {
          $passExist = $row['COUNT(*)'];
        }

          if(!$emailExist){


          }else {
            $emailUtiliser = "L'Email sesie et dejat utiliser ";
          }

          if (!$passExist){

          }else{
            $passUtiliser = "Le mots de passe sesie et dejat utiliser ";
          }

            if (!$passExist AND !$emailExist) {
              if ($input_password == $input_conf_password) { #controle mots de passe identique

                #requet dinsertion
                $requet3 = 'INSERT INTO clients (nom_client,prenom_client,email_client,passeword_client) VALUES ("'. $input_nom .'","'. $input_prenom .'","'. $input_email .'","'. $input_password .'")' ;
                $result3 = $mysqli->query( $requet3 );

               $requet= 'SELECT id_client , nom_client, prenom_client , email_client FROM clients WHERE nom_client = "'.$input_nom.'" AND prenom_client = "'.$input_prenom.'" AND email_client = "'.$input_email.'" ';
                $result = $mysqli->query($requet);
                while ($row = $result-> fetch_array(MYSQLI_BOTH))
                    {
                      $BD_nom = $row['nom_client'];
                      $BD_prenom = $row['prenom_client'];
                      $BD_email = $row['email_client'];
                      $BD_client_id = $row['id_client'];
                    }


                $mesage = "Vautre incription et terminer mercie";
              session_start();
                $_SESSION['info_client'] ="id client:" .$BD_client_id."<br> prenom :".$BD_prenom."<br> nom :".$BD_nom."<br> email :".$BD_email;

              }
            }


      }else {
        $ereur3 ="votre email nes pas valide !";
      }

    }else {
      $ereur3 = "Les Email sesie ne sont pas identique";
    }

  }else {
    $ereur2 = "Tout les champ doive etre remplie Atention";
  }

}

?>
<title>Nouveau Client</title>
</head>
<body>

  <?php  require 'menu.php';  ?>

  <main>
    <h1>Nouveaux client</h1>

    <article class="presentation">


      <form class="client" action="" method="post">
        <p>Nouveaux client</p>

        <div class="alert">

          <?php if (isset($ereur)) {
            echo $ereur ."<br>";
          } ?>

          <?php if (isset($ereur2)) {
            echo $ereur2 ."<br>";
          } ?>

          <?php if (isset($passUtiliser)) {
            echo $passUtiliser ."<br>";
          } ?>

          <?php if (isset($emailUtiliser)) {
            echo $emailUtiliser ."<br>";
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
            echo "<p class= 'ereur' >".$ereur_prenom ."</p>";
          } ?>
        </p>

        <p>
          <label for="input_email">Email</label>
          <input id="input_email" type="email" name="input_email" value="" placeholder="Email">

          <?php if (isset($ereur_email)) {
            echo "<p class= 'ereur' >".$ereur_email ."</p>";
          } ?>
        </p>

        <p>
          <label for="input_conf_email">Confimer vautre Email</label>
          <input id="input_conf_email" type="email" name="input_conf_email" value="" placeholder="Confimer vautre Email">

          <?php if (isset($ereur_conf_email)) {
            echo "<p class= 'ereur' >".$ereur_conf_email ."</p>";
          } ?>
        </p>

        <p>
          <label for="input_password">Mot de passe</label>
          <input id="input_password" type="password" name="input_password" value="" placeholder="mots de passe">

          <?php if (isset($ereur_password)) {
            echo "<p class= 'ereur' >".$ereur_password ."</p>";
          } ?>
        </p>

        <p>
          <label for="input_conf_password">Confimer mot de passe</label>
          <input id="input_conf_password" type="password" name="input_conf_password" value="" placeholder="Confimer mots de passe">

          <?php if (isset($ereur_conf_password)) {
            echo "<p class= 'ereur' >".$ereur_conf_password ."</p>";
          } ?>
        </p>

        <input class="bouton" type="submit" name="valider" value="valider">

        <?php if (isset($mesage)) {
          echo $mesage."<br>";
        } ?>

      </form>

    </article>
  </main>

  <?php  require 'footeur.php';  ?>
