<?php
session_start(); //inisialisation de la session
if (!isset($_SESSION['compte_cree']) AND !isset($_SESSION['conectez']) ) {
  header('location:conection.php');
}

require 'header.php';
require 'menu.php';
?>

<?php

$requet='SELECT prenom,nom FROM user';
$result = $mysqli->query($requet);

$user_id = $_SESSION['user_id']

?>
<!-- afichage html -->

<h2>page accueil</h2>


<article class="">

  <p> Bien venue sur le site des ville . Bonne visite :</p>

  <?php
  //afichage de presentation personaliser
  if ($_SESSION ) {
    if (isset($_SESSION['compte_cree']) ) {
      echo $_SESSION['compte_cree']. "" .$_SESSION['compt_nom'] ."".$_SESSION['compt_pseudo'] ."".$_SESSION['compt_maile'] ;
    }

    if (isset($_SESSION['conectez']) ) {
      echo $_SESSION['conectez']."" .$_SESSION['conect_pseudo'] ."".$_SESSION['conect_loging'] ;
    }


    //echo var_dump($_SESSION);

    require 'bar_de_recherche.php';

  }
  ?>


  <?php
  #CETTE PARTIE DU SCRIPTE INTEROGE LA TABLE user_searchs ET user_searchs_pays.
  # vARIABLE nécessaire :

  # ! Ouverture || inisialisation  de la session : session_start(); //inisialisation de la session
  # !  //$S_user_id = $_SESSION['user_id']
  # !  //$S_user_id

  #ELLE CRAIENT LES VARIABLE SUIVANTE :
  # // $exixte_pid et // $exixte_vid  POUR POUVOIR REUTLISER  SES vARIABLE DANS CE SCRIPTE ;
  # 1 ALERGER LA BASE DE DONNER : ENPECHER L' ECRITURE DE DE LIGNE DOUBLON user_id  DANS LES TABLE TABLE user_searchs ET user_searchs_pays
  # 2 AFICHER LE NONT DES VILLE STOCKER DANS SES TABLE
  # 3 INCREMENTER CHAMPS|| COLONE competeur_ville ET compteur_pays  DES TABLE TABLE user_searchs ET user_searchs_pays


echo "<h4> ___________var dump (\$_SESSION)_________je suis bloquer La______________<h4>";

  echo var_dump($_SESSION);

  $S_user_id = $_SESSION['user_id'];
  $S_user_id;
echo "<h4> ____________p1.1________distinct_______________<h4>";

$req_dif_comt = 'SELECT COUNT(DISTINCT(ville_id)) AS ville_id FROM user_searchs_ville WHERE user_id ='.$S_user_id ;
$resul_comt = $mysqli->query($req_dif_comt);

while ($row = $resul_comt->fetch_array(MYSQLI_BOTH)) {
  $UScomt_ville_dif =$row['ville_id'] ;
}

echo "<br><br> (\$UScont_ville_dif) COMPTE LE NOMBRE ID ville DIFERANTE =  " .$UScomt_ville_dif ;


echo "<h4> ____________p1.2________distinct_______________<h4>";

  $req_dif_comt = 'SELECT DISTINCT(ville_id) AS ville_id FROM user_searchs_ville WHERE user_id ='.$S_user_id ;
  $resul_comt = $mysqli->query($req_dif_comt);

  while ($row = $resul_comt->fetch_array(MYSQLI_BOTH)) {
    $USville_dif =$row['ville_id'] ;
  }

  echo "<br><br> (\$USville_dif)  les ville DIFERANTE =  " .$USville_dif ;


echo "<h4> ____________p2_______________________<h4>";



     foreach ($_SESSION['pays_id'] as $key=> $pays_id) {
        $requet_rech = 'INSERT INTO user_searchs_pays ( user_id ,pays_id ) VALUES ("'.$user_id .'", "'.$pays_id .'")';
        $result_rech = $mysqli->query($requet_rech);
        echo "<br>teste pays ID p2 = ".$pays_id;

        $requet_af = 'SELECT * FROM pays WHERE pays_id = ' .$pays_id;
        $result_af = $mysqli->query($requet_af);

        while ($row = $result_af->fetch_array(MYSQLI_BOTH)) {

          $p_id = $row["pays_id"];
          $p_nom = $row["pays_nom"];

          echo "<br> $p_nom";
        }
      }

echo "<h4> ____________p3_______________________<h4>";



    foreach ($_SESSION['ville_id'] as $key=> $ville_id) {
      $requet_rech2 = 'INSERT INTO user_searchs_ville ( user_id , ville_id  ) VALUES ("'. $user_id .'","'. $ville_id .'" )';
      $result_rech2 = $mysqli->query($requet_rech2);
      echo "<br>teste VILLE ID  p3 = ".$ville_id;  # var savfiche ok
      echo "<br> teste USville_dif = " .$USville_dif;

      $requet_af = 'SELECT * FROM villes WHERE ville_id = ' .$USville_dif;
      $result_af = $mysqli->query($requet_af);

      while ($row = $result_af->fetch_array(MYSQLI_BOTH)) {

        $v_id = $row["ville_id"];
        $v_nom = $row["ville_nom"];

        echo "<br> $v_nom";

      }
    }

echo "<h4> ____________p4_______________________<h4>";




?>

</article>

<?php require 'footeur.php';?>
