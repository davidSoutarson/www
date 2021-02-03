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
          <p> <label for="prenom">écriver votre prénom</label> </p>
          <p> <input type="text" name="prenom" value=""  placeholder="ecriver votre prenom ici" > </p>

          <p> <label for="email">écriver votre email</label> </p>
          <p> <input type="email" name="email" value="" placeholder="ecriver vortre email ici" > </p>

          <p> <label for="numeroDeTelephone">écriver numérot de telephone a 10 chifre </label> </p>
          <p> <input type="number" name="numeroDeTelephone" value=""  placeholder="numéro de telephone"> </p>

          <p> <label for="villeDeDepart">sectioner une ville de ville de depart</label> </p>
        <!--  <p>   <input type="radio" name="villeDeDepart" value="villeDeDepart" placeholder="villeDeDepart" > -->

            <?php
              $villeDeDepart = array('Paris','Oreléans','Dublin','Nice','Tours' );

                echo '<p>';
              for ($i=0; $i < 5 ; $i++) {

                echo  $villeDeDepart[$i].  '<input type="radio" name= "villeDeDepart"  value='. $villeDeDepart[$i] .' > ';
                // code...
              }
              echo '</p>';

              echo ' <p> <label for="heureDeDepeart">indiquer une  heure de depeart <input type="time" name="heureDeDepeart" value="" > </label>  </p> ';

              if ( (empty($nom)) or (empty($prenom)) or (empty($email)) or (empty($tel)) or (!isset ($villeDepart)) or (empty($heure)) )
                {
                  echo "Atention tout les camp doive etre remplie avent validation";
                }
                else {
                  echo "Braveaux";
                }

                echo '  <p> <input type="submit" name="validation" value="valider"> </p>';

             ?>


        </form>


        <div class="resulta">

        <!-- teste et condition du formulaire -->
        <?php

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $tel = $_POST['numeroDeTelephone'];
            $villeDepart = $_POST['villeDeDepart'];
            $heure = $_POST['heureDeDepeart'];
            $validation = $_POST['validation'];





          $proposionDeTrager = [
            id => 0, ['depart'=>'Paris','arriver' => 'Nantes','proposHeureDepart'=>'11:00','proposHeureArriver'=> '12:34' , 'conducteure' => 'Thomas'],
            id => 1,['depart'=>'Oreléans','arriver' => 'Nantes','proposHeureDepart'=>'05:15','proposHeureArriver'=> '09:32' , 'conducteure' => 'Mathieu'],
            id => 2,['depart'=>'Dublin','arriver' => 'Tours','proposHeureDepart'=>'07:23','proposHeureArriver'=> '08:50' , 'conducteure' => 'Nathanaël'],
            id => 3,['depart'=>'Paris','arriver' => 'Oreléans','proposHeureDepart'=>'03:00','proposHeureArriver'=> '05:26' , 'conducteure' => 'Clément'],
            id => 4,['depart'=>'Nice','arriver' => 'Nice','proposHeureDepart'=>'10:00','proposHeureArriver'=> '12:09' , 'conducteure' => 'Audrey'],
            id => 5,['depart'=>'Nice','arriver' => 'Nantes','proposHeureDepart'=>'10:40','proposHeureArriver'=> '13:00' , 'conducteure' => 'Pollux'],
            id => 6,['depart'=>'Tours','arriver' => 'Tours','proposHeureDepart'=>'11:00','proposHeureArriver'=> '16:10' , 'conducteure' => 'Edourd'],
            id => 7,['depart'=>'Nice','arriver' => 'Anboise','proposHeureDepart'=>'16:00','proposHeureArriver'=> '12:34' , 'conducteure' => 'Priscilla'],
            id => 8,['depart'=>'Nice','arriver' => 'Anboise','proposHeureDepart'=>'12:00','proposHeureArriver'=> '12:34' , 'conducteure' => 'Charlotte'],

          ];

            echo $proposionDeTrager[0][depart]. ' ? <br> --- --- --- <br>';
            echo $proposionDeTrager[0][proposHeureDepart]. ' ? <br> --- --- --- <br>';
            echo $proposionDeTrager[0][arriver]. ' ? <br> --- --- --- <br>';
            echo $proposionDeTrager[0][proposHeureArriver]. ' ? <br> --- --- --- <br>';
            echo $proposionDeTrager[0][conducteure]. ' ? <br> --- --- --- <br>';

            echo 'vous soueter partire de : ' .$villeDepart. '<br>';

            if (
              #condition a ameliaure id ville !!!
                 ( $villeDepart == $proposionDeTrager[0][depart])
                 or
                 ( $villeDepart == $proposionDeTrager[1][depart])
                 or
                 ( $villeDepart == $proposionDeTrager[2][depart])
                 or
                 ( $villeDepart == $proposionDeTrager[4][depart])
                 and
                 ($proposionDeTrager[0][depart] == $proposionDeTrager[3][depart])
              )
            {
              $n=1;
              $n++;
                echo '<br> il y a ' .$n. ' depart de :'  .$villeDepart. ' FAITE VOTRE CHOIX : (-: <br>';

                #plus deux deux propositions posible
                echo '<h3> p1  depart de : ' .$proposionDeTrager[0][depart]. ' ' .$proposionDeTrager[0][arriver]. '</h3> ' ;
                echo '<h3> p2  depart de : ' .$proposionDeTrager[3][depart]. ' ' .$proposionDeTrager[3][arriver]. '</h3> ' ;
            };

            foreach ($proposionDeTrager as $key => $value) {

               #echo $key. ' a : ' .$value. ' ???.<br> ';
               echo "<br>";
               foreach ($value as $key => $value) {

                  echo $key. ' a : ' .$value. '//';

                }
            };

echo "<br>________________________ teste________________________________ <br>";

         echo ' votre nom est : ' . $nom . '<br>'
         echo ' votre prenom est : ' . $prenom . '<br>';
         echo ' votre email : '. $email . '<br>';
         echo ' votre tel : ' . $tel . '<br>';
         echo ' depart de : ' . $villeDepart .  '<br>';
         echo 'aficher heure sesie :' . $heure . '<br>';
         echo 'validation : ' . $validation . '<br>_________<br>';

         if(!empty($nom))
         {
               echo ' votre nom est : ' . $nom . '<br>';
         }
         else
         {
           echo "merci de sesire votre nom <br>";
         }

         if(!empty($prenom))
         {
               echo ' votre prenom est : '. $prenom .'<br>';
         }
         else
         {
           echo "merci de sesire votre prenom <br>";
         }
         if(!empty($prenom))
         {
               echo ' votre email est : ' . $email. '<br>';
         }
         else
         {
           echo "merci de sesire votre email <br>";
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
           echo "vous soueter partire a : '=>' '.$heure.'  <br>" ;
           if  ($proposionDeTrager[0][proposHeureDepart] >= ($heure))
           {
             echo "heure disponible :".$proposionDeTrager[0][proposHeureDepart].'//' .$proposionDeTrager[3][proposHeureDepart].'. <br>';
           }
           else {
             echo "horaire nom diponible pour votre recher <br>";
           }

         }
         else {
           echo "vous devez indiquer un heure de depart <br>";
         }

        if (
            (empty($nom))or(empty($prenom))or(empty($email))or(empty($tel))or(!isset ($villeDepart))or(empty($heure))
          )
          {
            echo "tout les camt doive etre remplie";
          }
          else {
            echo "Braveaux";
          }

         ?>

      <?php include("footer.php"); ?>

      </div>
    </main>
    </div>

  </body>
</html>
