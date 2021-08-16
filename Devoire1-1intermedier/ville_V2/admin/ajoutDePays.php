<?php require('../inc_conection.php') ?>


    <?php
    #declaration tableu
    $result = [];
    $pays_nom = [];


//récuperation des variables
if (isset($_POST['submit_form']))
{
  $pays_nom = $_POST['pays_nom'];

  //verification du contenue des variables
  if( empty($pays_nom) )
  {
    $message = '<p class="error"> vous dever sesir le nom d\'un pays </p>';
  }
  else
  {
    // pays exite dans la basse ?
    // efetuon une requete SELECT avec count ()
    $result = $mysqli->query('SELECT count(pays_id)
    FROM pays WHERE pays_nom ="'. $pays_nom .'"');
    $row_pays = $result->fetch_array();
    //$row[0] contient la valeur par count() de Mysql


    if($row_pays[0] > 0)
    {
      $message = '<p class="error"> La ville est déjat enregistrée. </p>';
    }
    else
    {
      // requete insert into
      if($mysqli->query('INSERT INTO pays
        (pays_id,pays_nom)
        VALUES
        ("'. $pays_nom .'", "'.$pays_nom.'")'))
        {
          $message =  '<p class="message">Ajout de pays: '.$pays_nom.' est efectuer </p>';
        }
        else
        {
          $message =  '<p class="error">Ajout du pays: '.$pays_nom.' n\'est pas efectuer </p>';
       }
    }
  }
}
     ?>

     <!DOCTYPE html>
     <html lang="fr" dir="ltr">
       <head>
         <link rel="stylesheet" href="../css/style.css">
         <meta charset="utf-8">
         <title>ajout de pays</title>
       </head>
       <body>
      <div >
        <p>Patie ajout pays</p>
      <?php include('admin_menue.php') ?>
      </div>
     <div>
       <h2>Ajout de Pays ?</h2>
       <?php if(isset($message)) echo $message  ?>
       <form  method="post">
         <p>Nom de la pays : <input  type="text" name="pays_nom" ></p>


         <p> <input type="submit" name="submit_form" value="valider"></p>

       </form>
     </div>
  </body>
</html>
