<?php

if (!isset($_SESSION['compte_cree']) AND !isset($_SESSION['conectez']) ) {
  header('location:conection.php');
}

$result = "";
$row = "";

$pays_nombd ="";
$pays_idbd ="";
$ville_nombd ="";
$ville_idbd ="";
$ville_textebd ="";

$recherche ="";
$alert= "";

$requet='SELECT pays_nom
,pays.pays_id
,ville_nom
,villes.ville_id
,ville_texte
FROM pays INNER JOIN villes ON pays.pays_id = villes.pays_id';
$result = $mysqli->query($requet);

if (  isset($_POST['recherher_villes'])  ) {
  $ok = 1 ;

  if ( empty($_POST['input_recherche'])) {

    $alert = "Sesiser une recherhe";
    $ok= 0;

  }else {
    // code...
    if (isset($_POST['input_recherche'])AND !empty($_POST['input_recherche'])) {
      $recherche = ($_POST['input_recherche']);
      $recherche = trim($recherche); // suprime les espase
      $recherche = strip_tags($recherche); // suprime les entre indsirable <strong> paris </strong>


      $R = $recherche.'%';
      //echo $R; teste

      $requet='SELECT pays_nom
      ,pays.pays_id
      ,ville_nom
      ,villes.ville_id
      ,ville_texte
      FROM pays INNER JOIN villes ON pays.pays_id = villes.pays_id
      WHERE pays_nom LIKE "'.$R.'" OR ville_nom LIKE "'.$R.'"
      ORDER BY pays_nom ,ville_nom  ';

      $result = $mysqli->query($requet);
      /* Tableau associatif et numérique  utilisation mode optinelle MYSQLI_BOTH EN argumet de la fonction fetch_array()*/
      while ($row = $result-> fetch_array(MYSQLI_BOTH)) {
        $pays_idbd = $row['pays_id'];
        $pays_nombd = $row['pays_nom'];
        $ville_idbd = $row['ville_id'];
        $ville_nombd = $row['ville_nom'];
        $ville_textebd = $row['ville_texte'];

        $villesbd[$ville_idbd] = $ville_nombd;
        $paysbd[$pays_idbd] = $pays_nombd;
      }
    }
    if ($R == empty($villesbd) or $R == empty($paysbd)) {
      $alert ="aucune corepondance reformuler vautre recherhe";
      $ok=0;
    }
  }

}else {
  $ok= 0;

}

?>

<!-- afichage html -->

<div class="bar_de_recherche">
  <form class="bdr" action="" method="post">

    <label for="input_recherche">recherher une villes : </label>

    <p>
      <input id=input_recherche type="search" name="input_recherche" value="" placeholder="Sesiser votre recherhe">
      <input id=R-bouton type="submit" name="recherher_villes" value="RECHERCHER">
    </p>
    <p><?php echo $alert ?></p>

  </form>

  <?php if ($ok == 1): ?>

    <h3> selectioner une ville parmie les resulta: </h3>

    <li>
      <?php foreach ($villesbd as $id => $ville): ?>

        <a href="ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a>

        <?php
        //teste recuperation  des variable user_id et user_ville APRES utilistion recherche_villes :) siconecter bien
        $_SESSION['user_id'];



        $_SESSION['ville_id'] = $id;
        $ville_id[] = $_SESSION['ville_id'];
        $_SESSION['ville_id'] = $ville_id;



        $_SESSION['ville_nom'] = $ville;
        $ville_nom[] = $_SESSION['ville_nom'];
        $_SESSION['ville_nom'] = $ville_nom;



        ?>

      <?php endforeach; ?>

    </li>

  <?php endif; ?>

</div>
