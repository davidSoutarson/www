<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rechercher un covoiturage</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include("header.php"); ?>

    <h2>trager proposer</h2>
    <?php
    # variable sinplifier permetent stocker retour de champ
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email = $_POST['email'];
      $telepone = $_POST['telephone'];

      $villeDepart = $_POST['villeDepart'];
      $villeAriver = $_POST['villeAriver'];
      # ne fout t'il pas fractioner la valeur heure ?

      $departTime = $_POST['departTime'];
      $ariverTime = $_POST['ariverTime'];

    # afichage du contenu des variable simplifier
    /*  echo 'nom : '. $nom . '<br>';
      echo 'prenom : '. $prenom .'<br>';
      echo 'email : '. $email .'<br>';
      echo 'telephone : '. $telepone .'<br>'; */
      echo "<br>" ;

      print_r($_POST ) ;

      var_dump($_POST) ;

      echo "<br>" ;

      print_r($villeAriver);

      echo "<br>";

      print_r( $_POST['villeAriver']);

      echo "<br>fase teste _____________________________________________________ teste <br> <br> " ;

      echo 'covoiturage depar de'. $villeDepart . ' proposer par : '. $nom . ' '. $prenom .' ' . $villeDepart .' => '. $villeAriver . '<br>';
      echo 'vile de depar : '. $villeDepart . ' : Heure de dépar '. $departTime . '<br>';
      echo 'vlie de d\'ariver : '. $villeAriver . ' : Heure d\'ariver ' . $ariverTime . '<br>';
      echo 'email : '. $email . ' telephone : '. $telepone . '<br>';




     ?>

  </body>
</html>
