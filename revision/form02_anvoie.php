<?php
session_start(); //inisialisation de la session
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>revision tretement formulaire</title>
  </head>
  <body>

    <h1> Une revition sur les formulaire et leur tretemant </h1>
    <?php

    if (isset( $_SESSION['errors']))
    {
        foreach ($_SESSION as $errors )
        {
          foreach ($errors as $name => $alerte)
          {
          echo $name. ' : ' . $alerte .'<br>';//afiche les ereurs a partir de la session créer danle fichier taitement
          }
        }
    }



    ?>
    <form class="form_02" action="taitement.php" method="post">
      <input type="hidden" name="date" value="">

      <fieldset>
          <h2>formulaire d'authentification.</h2>
        <p>
          <label for="prenom"> Prenom :</label>
          <input type="text" name="prenom" id="prenom" value="" placeholder="ecriver votre Prenom ici." autocomplete="on" autofocus =" true" >
        </p>
        <p>
          <label for="nom"> Nom :</label>
          <input type="text" name="nom" id="nom" value="" placeholder="ecriver votre Nom ici." autocomplete="on" autofocus =" true"  >
        </p>

        <p>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" value="" placeholder="ecriver votre email ici." autocomplete="on" autofocus =" true" >
        </p>

        <p>
          <label for="condition_utilisater">Acepter vous que se cite conserve vaux recher sous forme de setion <a href="#">en savoire plus</a> afin de fasiliter voutre experience utilisateur </label>
          <p>
            Oui jai lue est j'accepte <input type="radio" name="condition_utilisater" value="oui">
          </p>
          <p>
            Non je n'accepte pas <input type="radio" name="condition_utilisater" value="non">
          </p>
        </p>

        <p>
          <label for="valider">valider</label>
          <input type="submit" name="valider" value="valider" >
        </p>

      </fieldset>

    </form>

    <p>1 verifier si le formulaire tautalement remplie </p>
    <p> 2 je fais remplie la base de doner avec les profile utisateur compler </p>



  </body>
</html>
