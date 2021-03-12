<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>resultas du formulair</title>
  </head>
  <body>

    <?php

    //  print_r($_GET);

    //synplifion la sintax
        $prenom = $_GET['prenom'];
        $email = $_GET['email'];
        $color = $_GET['color'];

      //var_dump($_GET);



   if (!empty($prenom))
    {
        echo 'bonjour,votre prénom est : ' .$prenom.'<br>' ;
    }
    else
    {
      echo 'vous n\'aver pas sesaisi votre premon' .'<br>';
    }
    if (!empty($email))
    {
        echo 'votre email est : ' .$email.'<br>' ;
    }
    else
    {
      echo 'vous n\'aver pas sesaisi votre email' .'<br>';
    }
    if (isset($color))
    {
        echo 'votre couleur préfèrée est  : ' .$color.'<br>' ;
    }
    else
    {
      echo 'vous n\'aver pas indiquer votre couleur préfèrée' .'<br>';
    }

    if(
        (!isset($_GET['validation']) )
        OR
        ( empty($_GET['prenom']) ) //si la varible prenon et vide
        OR //ou
        ( empty($_GET['prenom']) ) //si la varible maile et vide
        OR // ou
        (!isset($_GET['color']) ) //si la varile color nexite pas
      )
  {
    echo 'Tout les champ du formulaires doive etre remplis';
    var_dump($_GET);

  }
   else
   {


         echo '<br>!!! votre prenon est ' .$prenom.
         ' votre email : ' .$email. ' et couleur :' .$color. '<br>';

         echo 'bonjour,votre prénom est : ' .$_GET['prenom'].'<br>' ;
         echo 'votre email est : ' .$_GET['email'].'<br>';
         echo 'votre couleur préfèrée est : ' .$_GET['color']. '<br>';
   }

       echo 'bonjour,votre prénom est : ' .$_GET['prenom2'].'<br>' ;
       echo 'votre email est : ' .$_GET['email'].'<br>';
       echo 'votre couleur préfèrée est : ' .$_GET['color']. '<br>';
     ?>

  </body>
</html>
