<?php require('../inc_conection.php') ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="utf-8">
    <title>ajout de ville</title>
  </head>
  <body>
    <?php
//récuperation des variables
if (isset($_POST[submit_form])) // Avertissement: Utilisation de submit_form constantes non définies - supposé « submit_form » (cela lancera une erreur dans une future version de PHP) en E:\wamp64\www\ville_site\admin\ajout.php sur la ligne 12
{
  // code...
  $ville_nom = $_POST['ville_nom'];
  $ville_texte = $_POST['ville_texte'];
  //requete inser into
  if ($mysqli->query('INSERT INTO villes (ville_nom, ville_texte)
  VALUES ("'.$ville_nom.'", "'.$ville_texte.'")'))
  {
/*si la requette et efectuer elle retourne le boolen TRUE et
donc le mesage poura etre aficher*/
    $message = '<p clase="message">L\'ajout de la ville'. $ville_nom .' est effectué. </p>';
  }
}
     ?>
     <div>
       <h1>Ajout de ville</h1>
       <?php if(isset($message)) echo $message  ?>
       <form  method="post">
         <p>Nom de la ville : <input type="text" name="ville_nom"></p>

         <p>texte presentation </br>
         <textarea name="ville_texte" cols="32" rows="8"></textarea>
         </p>

         <p> <input type="submit" name="submit_form" value="valider"></p>

       </form>
     </div>
  </body>
</html>
