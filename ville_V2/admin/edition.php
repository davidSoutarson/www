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
//requete 1
$result = $mysqli->query('SELECT ville_id
                                ,ville_nom
                                ,ville_texte
                                ,pays_id
                                FROM villes
                                WHERE ville_id ='.$id );

  // création d'un nouvelle array
  $row = $result->fetch_array();

//requet 2 realiser par profeseur 2/06/2021 pouver vous mespliquer les aliace
  $result2 = $mysqli->query('SELECT DISTINCT(pays_nom),v.pays_id
                            FROM pays p
                            INNER JOIN villes v ON v.pays_id = p.pays_id
                            ORDER BY pays_nom='. $id);
/*comme dans la requet 2 result2  je recuper les  pays_nom je pance qu'il me faut une requet capable de recuperer aucie les pays_id */

$pays_row = $result2->fetch_array();


// destiner a l'afichage
$nom = $row['ville_nom'];
$texte = $row['ville_texte'];
$ville_pays_id =$row['pays_id'];

//destiner alafichage des pays
$nom_pays = $pays_row['pays_nom']; //j'ais corijer sa le 03/06/2021

/*_____________________utisation de wille___03/06/2021______corection dans cette parti je recuper pas l'Allmagne___________________________*/
while ($pays_row= $result2->fetch_array())
  {
    // code... 3.b2 creation d'un array pour afichage hors de la boucle les pays
    //$pays [$pays_row['pays_nom']] = $row['pays_id'];// ce qui rand une patie de se tableau superflus   $pays = $pays_row['pays_nom'] ; ???
    $pays [$pays_row['pays_id']] = $pays_row['pays_nom']; /*le probleme etait  du au ORDER BY pays_nom L 23*/
  }

  ?>
<?php echo var_dump($pays); ?>
<?php echo var_dump($ville_pays_id); ?>
<!-- _______________________________afichage ? pourai etre dans une parti reserver ???_____________________________________________-->

<p>afichage pays non souter ou et l'Allmagne et pour quoi et elle partie il <br>
  est inposible dapliquer la verification condition if  else: </p>
<ul>
  <?php foreach ($pays as $id => $pays) : ?>

  <?php if ( $ville_pays_id == $id): ?>
    <li> <input checked="checked" type="radio" name="pays" value="<?php echo $id ?> "><?php echo $pays ?></li>
    <?php else : ?>
    <li> <input  type="radio" name="pays" value="<?php echo $id ?> "><?php echo $pays ?></li>
    <?php endif ?><!-- fin if condion $ville_pays_id == $pays_id  'du cour' -->
  <?php endforeach ?>
</ul>




<div>
  <h1>editer ville /modifier ville</h1>
  <?php if(isset($message)) echo $message  ?>
  <form  method="post">
    <p>Nom de la ville : <input type="text" name="ville_nom" value="<?php echo $nom ?>" ></p>

    <p>texte presentation </br>
    <textarea  name="ville_texte" cols="32" rows="8"/><?php echo $texte ?>></textarea>
    </p>
    <input type="hidden" name="ville_id" value="<?php echo $id ?>">
<!--_________________________afichage________________________________________-->

    <p> <input type="submit" name="submit_form" value="valider"></p>
  </form>


  </body>
</html>
