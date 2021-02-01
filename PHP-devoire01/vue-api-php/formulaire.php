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
        <!--formulaire utilisent la methode POST. La sicle contenue dans  latribue action et lui meme : formulaire.php -->
        <form class="formCovoite" action="formulaire.php" method="post">

          <p> <label for="nom">écriver votre nom</label> </p>
          <p> <input type="text" name="nom" value=""  placeholder="écriver votre nom ici" > </p>
          <?php
            if(!empty($nom))
            {
                echo ' votre nom est : ' . $nom . '<br>';
              }
              else
              {
              echo "merci de serire votre prenom";
            }

           ?>

          <p> <label for="prenom">écriver votre prénom</label> </p>
          <p> <input type="text" name="prenom" value=""  placeholder="ecriver votre prenom ici" > </p>

          <p> <label for="email">écriver votre email</label> </p>
          <p> <input type="email" name="email" value="" placeholder="ecriver vortre email ici" > </p>

          <p> <label for="numeroDeTelephone">écriver numérot de telephone a 10 chifre </label> </p>
          <p> <input type="number" name="numeroDeTelephone" value=""  placeholder="numéro de telephone"> </p>

          <p> <label for="villeDeDepart">sectioner une ville de ville de depart</label> </p>
        <!--  <p>   <input type="radio" name="villeDeDepart" value="villeDeDepart" placeholder="villeDeDepart" > -->

            <?php
              $villeDeDepart = array('Paris','Oreléans','Dublin','Nice','Tour' );

                echo '<p>';
              for ($i=0; $i < 5 ; $i++) {

                echo  $villeDeDepart[$i].  '<input type="radio" name= "villeDeDepart"  value='. $villeDeDepart[$i] .' > ';
                // code...
              }
              echo '</p>';


             ?>

             <p> <label for="heureDeDepeart">indiquer une  heure de depeart <input type="time" name="heureDeDepeart" value="" > </label>  </p>

          <p> <input type="submit" name="validation" value="valider"> </p>

        </form>


        <div class="resulta">

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
         echo 'validation : ' . $validation . '<br>_________<br>';

         if(!empty($nom))
         {
               echo ' votre nom est : ' . $nom . '<br>';
         }
         else
         {
           echo "merci de serire votre prenom <br>";
         }

         if (isset ($villeDepart))
         {
           echo "vous aver choisie : '.$villeDepart.' comme ville de depart <br>" ;
         }
         else {
           echo "vous devez choisir un ville de depart <br>";
         }

         if (!empty($heure))
         {
           echo "vous soueter partire a : '.$heure.'  <br>" ;
         }
         else {
           echo "vous devez indiquer un heure de depart <br>";
         }

         ?>

      <?php include("footer.php"); ?>

      </div>
    </main>
    </div>

  </body>
</html>
