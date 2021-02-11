<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>fomulaire</title>
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body>
    <div id= wraper>

      <?php include 'header.php' ?>
      <main>
        <h1>covoiturage</h1>
        <div class="contenaire">

          <form class="form-covoit" action="formulaire.php" method="post">
<!--  debut formulaire php _______________________________________________________________ -->

<div class="box-nom ">
          <p> <label for="nom">ecriver votre nom </label></p>
          <input type="text" name="nom" value=""  placeholder="">
          </div>

<div class="box-prenom ">
          <p> <label for="prenom">ecriver votre prenom </label></p>
          <input type="text" name="prenom" value="" placeholder="">
          </div>

<div class="box-email ">
          <p> <label for="email">ecriver votre email </label><p/>
          <input type="text" name="email" value=""  placeholder="">
          </div>

<div class="box-tel ">
          <p> <label for="telephone">ecriver votre N° teléphone </label></p>
          <input type="number" name="telephone" value=""  placeholder="">
          </div>

<div class="box-ville">
          <p> <label for="ville_de_depart">choisiser votre ville</label></p>
          <select class="" name="ville_de_depart">
            <option value="">paris</option>
            <option value=""></option>
            <option value="">maseille</option>
            <option value="">bordeaux</option>

          </select>
        </div>

<div class="bouton">
          <input type="submit" name="validation" value="valider" >
          </div>

<?php
# ___________ ci le fomulaire et vide _____________________________________________________________-->
if(
    (!isset($_POST['validation']) )//ci se nes pas valider
    OR
    ( empty($_POST['nom']) ) //si la varible nom et vide
    OR
    ( empty($_POST['prenom']) ) //si la varible prenon et vide
    OR
    ( empty($_POST['email']) ) //si la varible emaile et vide
    OR
    ( empty($_POST['telephone']) ) //si la varible tel et vide
    OR
    (!isset($_POST['ville_de_depart']) )//si choix de ville  exite pas

  )
          {
            echo"vous naver pas remplie le formulaire";


# 1 champ non________________________________________________________________________-->            if (empty($prenom))
          if (!empty($nom))
            {
                echo"<p>champ 01 pas remplie</p>";
            };
# 2 champ prenom____________________________________________________________________-->
            if (!empty($prenom))
            {
                echo"<p>champ 02 pas remplie</p>";
            };

# 3 champ email___________________________________________________________________-->
          if (!empty($email))
          {
            echo"<p>champ 02 pas remplie</p>";
          };

# 4 champ telephone________________________________________________________________________-->
            if (!empty($telephone))
            {
              echo"<p>champ 04 pas remplie</p>";
            };

#  5 champ vile a selectoner________________________________________________________________-->

            if (isset($ville_de_depart))
              {
                echo"<p>champ 05 vile non selectionser</p>";
             };



# 6 validation formulaire__________________________________________________________________-->
            if (isset($validation))
            {
              echo"<p>le bouton valider et</p>";
            };




 $validation = $_POST['validation'];
 $nom = $_POST ['nom'];
 $prenom = $_POST ['prenom'];
 $email = $_POST ['email'];
 $telephone = $_POST ['telephone'];
 $ville_de_depart = $_POST ['ville_de_depart'];
  };
 echo "<p>bonjour ".$nom." , ".$prenom." vous aver ".$validation." le formulaire de contact</p>";
 echo "<p>verier que les information son exate.</p>";
 echo "<p>pour permtre au conducter de vous contacter</p>";
 echo "<p>votre maile est : ".$email."</p>";
 echo "<p>votre téléphone est le :" .$telephone."</p>";

            ?>

<!-- ________________________________________________________________________-->

            </form>

          </div> <!-- fin div contenaire -->
          <?php include 'footeur.php' ?>
        </div> <!-- fin div wraper -->

      </main>

    </div>
  </body>
</html>
