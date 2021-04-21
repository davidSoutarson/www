<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>traitement des donner</title>
  </head>
  <body>
        <p>Bonjour
      <?php
        echo $_POST['prenom'];
       ?>
       ,fais comme cher tois !</p>

       <p>Tu ne t'appesle pas
         <?php echo $_POST['prenom']; ?>
       ? j'ai du mal comprendre !</p>

       <p>clique <a href="lesformulaire.php"> ici </a> pour retaper tont prénom </p>
       <p>Ou clique <a href="Form01-DemendeNom.php"> ici </a> pour retaper tont prénom comme exeple video </p>
  </body>
</html>
