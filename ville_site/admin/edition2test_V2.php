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
    //Partie pays
    $pays_nom=$_POST['pays_nom'];
    $pays_id=$_POST['pays_id'];


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
 //requete de .M...........................................
  $result = $mysqli->query('SELECT ville_id , ville_nom, ville_texte,pays_id
    FROM villes WHERE ville_id = '. $id );

  //new
  $result2 = $mysqli->query('SELECT pays_id , pays_nom
      FROM pays WHERE pays_id ='.$id);


  // création d'un nouvelle array
  $row = $result->fetch_array();

  //new
  $table_pays = $result2->fetch_array();

  // destiner a l'afichage villes
  $nom = $row['ville_nom'];
  $texte = $row['ville_texte'];
  $ville_id =$row['ville_id'];
  $ville_pays_id =$row['pays_id'];

  // destiner a l'afichage des pays
  $pays_id = $table_pays['pays_id'];
  $pays_nom = $table_pays['pays_nom'];


/*new V2 v3 comme cours + id desspoire cette exemple ne fonction pas nom plus
$result = $mysqli->query('SELECT  pays_nom ,ville_nom, ville_id
    FROM pays
    INNER JOIN villes
    WHERE pays_id = pays_id AND pays_id = '. $pays_id);

while($row = $result->fetch_array())
{

  $pays_nom=$row['pays_non'];
  $villes[$row['ville_id']] = $row['ville_nom'];
}*/
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

    <label for="pays_nom">a jouter  modifier un pays</label>
    <p> <input type="text" name="pays_nom" value=""> </p>


    <p> <input type="submit" name="submit_form" value="valider"></p>


  </form>
  <p> pays ES == 1 ; ES == 2 ; AL == 3; URSS == 4 ; italie == 5</p>
  <p> je cher a comprendre</p>
 <?php  echo var_dump($result); ?>

<?php echo "<br>" ?>
 <?php  echo $nom ?>
 <?php  echo $ville_id  ?>
 <?php  echo $ville_pays_id ."ville_pays_id" ?>

  <?php echo var_dump($row); ?>
  <p> prise de choux vilinininin choux pouf!!! pouf !!!!</p>

 <?php  echo $pays_id ."pays_id" ?>




<p>ne fonction pas sans $id L53.ne fontione pas comme atendue code else doubler **</p>
<?php foreach ($table_pays as $pays_id => $pays_nom):?>

<?php if($ville_pays_id == $pays_id) :?>
  <li> <input checked="checked" type="radio" name="pays_id" value="<?php echo $pays_id ?>" /> <?php echo "* if ! " .$pays_nom ?>  </li>
  <?php else :?>
    <li> <input type="radio" name="pays_id" value="<?php echo $pays_id ?>" /> <?php echo  "* else ? " .$pays_nom ?> </li>
  <?php endif ?>
  <?php endforeach ?>



  </body>
</html>
