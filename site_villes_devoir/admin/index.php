<?php
session_start(); //inisialisation de la session
if (!isset($_SESSION['admin_compte_cree']) AND !isset($_SESSION['admin_conectez']) ) {
  header('location:admin_conection_user.php');
}

require 'admin_header.php';
require 'admin_menu.php';

$requet='SELECT * FROM admin_user';
$result = $mysqli->query($requet);

/*---------------------------------------------------------------------------*/
//requête 1 boucle 1
$result = $mysqli->query('SELECT ville_id
                          ,ville_nom
                          FROM villes');

while ($row= $result->fetch_array())
  {
  // code... 3.b creation d'un array pour afichage hors de la boucle
  $villes [$row['ville_id']] = $row['ville_nom'];
  }


//requete 2 boucle 2
$result2 = $mysqli->query('SELECT pays_id ,pays_nom FROM pays');

while ($pays_row= $result2->fetch_array())
  {

    $pays [$pays_row['pays_id']] = $pays_row['pays_nom'];

  }




?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/master.css">
    <link rel="icon" href="./image/icon.ico">
    <title>tp admin villes site</title>
  </head>
  <body>
    <main>
      <article class="">

        <h1>espase administration</h1>
        <?php


        if ($_SESSION ) {

            if (isset($_SESSION['admin_compte_cree']) ) {
              echo $_SESSION['admin_compte_cree']. "" .$_SESSION['admin_compt_nom'] ."".$_SESSION['admin_compt_pseudo'] ."".$_SESSION['admin_compt_maile'] ;

            }

            if (isset($_SESSION['admin_conectez']) ) {
              echo $_SESSION['admin_conect_pseudo']."".$_SESSION['admin_conect_loging'] ;

            }

           //var_dump($_SESSION);
        }

        ?>
      </article>


      <article class="adminin pays et villes">

        <h2>Gestion des Villes et Pays.</h2>

        <p>liste ville</p>
          <ul>
            <?php foreach ($villes as $id => $ville) : ?>
              <li>
                <a href="../ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a>
                <a href="edition.php?id=<?php echo $id ?>"> -[ Editer]- </a>
                <a href="suppression.php?id=<?php echo $id ?>"> [SUPPRIMER] </a>
              </li>

            <?php endforeach ?>
          </ul>

        <p>liste pays  </p>
          <ul>
            <?php foreach ($pays as $id => $pays) : ?>
            <li>
              <a href="pays.php ?id=<?php echo $id ?> "> <?php echo $pays ?></a>
              <a href="suppression.php?id=<?php echo $id ?>"> [SUPPRIMER] </a>
            </li>
            <?php endforeach ?>
          </ul>

      </article>

<?php require '../footeur.php';?>
