<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formulaire covoituturage</title>
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body>
    <div id="wrapere">

      <?php include("header.php");  ?>

      <main>

        <h1>covoiturage</h1>
        <p>decription courte api covoiturage </h2>

        <form class="formCovoite" action="formulaire.php" method="post">

          <p> <label for="nom">écriver votre nom</label> </p>
          <p> <input type="text" name="nom" value="" required pattern="[A-Za-z]+" placeholder="écriver votre nom ici" > </p>

          <p> <label for="prenom">écriver votre prénom</label> </p>
          <p> <input type="text" name="prenom" value="" required pattern="[A-Za-z]+" placeholder="ecriver votre prenom ici" > </p>

          <p> <label for="email">écriver votre email</label> </p>
          <p> <input type="email" name="email" value="" placeholder="ecriver vortre email ici" > </p>

          <p> <label for="numeroDeTelephone">écriver numérot de telephone a 10 chifre </label> </p>
          <p> <input type="number" name="numeroDeTelephone" value="" required pattern="[0-9]+" placeholder="numéro de telephone"> </p>

          <p> <label for="villeDeDepart">sectioner une ville de ville de depart</label> </p>
        <!--  <p>   <input type="checkbox" name="villeDeDepart" value="villeDeDepart" placeholder="villeDeDepart" > -->

            <?php
              $villeDeDepart = array('Paris','Oreléans','Dublin','Nice','Tour' );

                echo '<p>';
              for ($i=0; $i < 5 ; $i++) {

                echo  $villeDeDepart[$i].  '<input type="checkbox" name= "villeDeDepart"  value='. $villeDeDepart[$i] .' > ';
                // code...
              }
              echo '</p>';

             ?>

             <label for="villeDeDepart"> <select class="ville" name="villeDeDepart"> </label>

             </select>

             <p> <label for="heureDeDepeart">indiquer une  heure de depeart <input type="time" name="heureDeDepeart" value="" > </label>  </p>

          <p> <input type="submit" name="validation" value="valider"> </p>

        </form>

        <!-- teste et condition du formulaire -->
        <?php

        #  - je vais devoir verifier si tous les chant de formulaire son remplie par l'utilisateur avent validation



        #  var_dump($_POST);

          $nom = $_POST['nom'];
          $prenom = $_POST['prenom'];
          $email = $_POST['email'];
          $tel = $_POST['numeroDeTelephone'];
          $villeDepart = $_POST['villeDeDepart'];
          $heure = $_POST['heureDeDepeart'];
          $validation = $_POST['validation'];

         echo ' votre nom est : ' . $nom . '<br>';
         echo ' votre prenom est : ' . $prenom . '<br>';
         echo ' votre email : '. $email . ' votre tel : ' . $tel . '<br>';
         echo ' depart de : ' . $villeDepart .  '<br>';
         echo 'aficher heure sesie :' . $heure . '<br>';
         echo 'validation : ' . $validation . '<br>';


         ?>

      </main>

      <?php include("footer.php"); ?>

    </div>

  </body>
</html>
