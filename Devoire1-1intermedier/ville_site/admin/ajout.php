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
if (isset($_POST['submit_form']))
{
  $ville_nom = $_POST['ville_nom'];
  $ville_texte = $_POST['ville_texte'];
  //verification du contenue des variables
  if((empty($ville_nom)) OR empty($ville_texte))
  {
    $message = '<p class="error"> vous dever sesir le nom d\'une vile est sa présentation. </p>';
  }
  else
  {
    // ville exite dans la basse ?
    // efetuon une requete SELECT avec count ()
    $result = $mysqli->query('SELECT count(ville_id)
    FROM villes WHERE ville_nom ="'. $ville_nom .'"');
    $row = $result->fetch_array();
    //$row[0] contient la valeur par count() de Mysql
    if($row[0] > 0)
    {
      $message = '<p class="error"> La ville est déjat enregistrée. </p>';
    }
    else
    {
      // requete insert into
      if($mysqli->query('INSERT INTO villes
        (ville_nom, ville_texte)
        VALUES
        ("'. $ville_nom .'", "'. $ville_texte .'")'))
        {
          $message =  '<p class="message">Ajout de la ville: '.$ville_nom.' est efectuer </p>';
        }
        else
        {
          $message =  '<p class="error">Ajout de la ville: '.$ville_nom.' n\'est pas efectuer </p>';
       }
    }
  }
}
     ?>

     <div>
       <h1>Ajout de ville</h1>
       <?php if(isset($message)) echo $message  ?>
       <form  method="post">
         <p>Nom de la ville : <input type="text" name="ville_nom"></p>

         <p>texte presentation:</br>
           <textarea name="ville_texte" cols="32" rows="8"></textarea>
         </p>

         <p> <input type="submit" name="submit_form" value="valider"></p>

       </form>
     </div>
  </body>
</html>
