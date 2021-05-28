<?php require('../inc_conection.php');?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edition</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <?php
/*Partie 1: gestion de la saissie et enregistrement
-----------------------------------------------------*/
//récuperation des variables du formulaire corespondant
if (isset($_POST['submit_form']))
  {
    $ville_nom = $_POST['ville_nom'];
    $ville_texte = $_POST['ville_texte'];
    $ville_id = $_POST['ville_id'];
    //verification du contenue des variables
    if((empty($ville_nom)) OR empty($ville_texte))
      {
        $message = '<p class="error"> vous dever sesir le nom d\'une vile est sa présentation. </p>';
      }
      else
      {
        // requete UPDATE
        if($mysqli->query('UPDATE villes SET ville_nom = " ' . $ville_nom . '", ville_texte = "'. $ville_texte .'" WHERE ville_id ='.$ville_id ))
          {
            $message = '<p class="message">La mise à jour de la ville '. $ville_nom .' est effectuée.</p>';
          }
        else
        {
          $message = '<p class="error">La mise à jour de la ville '. $ville_nom .' n\'est effectuée.</p>';
        }
      }
  }
/* Partie 2 recuperation des variable des information de base et affichage dans le formulaire
----------------------------------------recuperation creation afichage se repette plusier fois------------------------------------------------*/
//  récuperartion de la variable externe
  $id = $_GET ['id'];
//requete
$result = $mysqli->query('SELECT ville_id , ville_nom, ville_texte
  FROM villes WHERE ville_id = '. $id );

// création d'un nouvelle array
$row = $result->fetch_array();

// destiner a l'afichage
$nom = $row['ville_nom'];
$texte = $row['ville_texte'];
/*----------------------recuperation creation afichage se repette plusier fois-------------------------------------------------------------------*/
  ?>

<div>
  <h1>editer ville /modifier ville</h1>
  <?php if(isset($message)) echo $message  ?>
  <form  method="post">
    <p>Nom de la ville : <input type="text" name="ville_nom" value="<?php echo $nom ?>" ></p>

    <p>texte presentation </br>
    <textarea  name="ville_texte" cols="32" rows="8"/><?php echo $texte ?>></textarea>
    </p>
    <input type="hidden" name="ville_id" value="<?php echo $id ?>">
    <p> <input type="submit" name="submit_form" value="valider"></p>

  </form>

  </body>
</html>
