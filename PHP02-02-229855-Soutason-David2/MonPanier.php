<?php
require 'in_conetion_BD.php';
session_start();
if(!empty($_SESSION['info_client'])){
  #memo time() segonde minute heur jour ,
  setcookie('info_client',$_SESSION['info_client'],time()+60*60*24*15,null,null,false,true);
}

if (isset($_POST['ajouter'])) {

  $delai = 1;
  $url = 'MonPanier.php';
  header("Refresh: $delai;url=$url");

  $qte = $_POST['quantiter'];

  $id_produit = $_POST['ajouter'];

  $n= "";

  $_SESSION['ajout'][$id_produit] = $qte;

  $prodAjou=$_SESSION['ajout'];

  foreach ($prodAjou as $id_p => $quantiter_produit ){
    $requet ='SELECT * FROM produit WHERE id_produit='.$id_p;
    $result = $mysqli->query($requet);

    while ($row = $result->fetch_array(MYSQLI_BOTH) ){
      $id_produit = $row['id_produit'];
      $BD_nom_produit = $row['nom_produit'];
      $BD_prix_produit = $row['prix_produit'];
      //  $mon_tableau['ma_colonne']= $ma_variable;

      $tableau_ajout_prod[$id_produit][$BD_nom_produit][$BD_prix_produit]= $quantiter_produit;

      $total[]=  $prix = $BD_prix_produit * $quantiter_produit ;

      $Total_a_payer = array_sum($total);
    }

    #création de cookie_____________________________________________________________________

    $panier = $tableau_ajout_prod; # dans la boucle 2 tatblau

    $_SESSION['contenue_panier'] = $panier;

    #var_dump($_SESSION['contenue_panier']);

    $inPanier = serialize($_SESSION['contenue_panier']);
    setcookie('panier',$inPanier ,time()+60*60*24*15);

    $Total_a_payer = serialize($Total_a_payer);
    setcookie('totalPanier',$Total_a_payer,time()+60*60*24*15);
  } #dans la boucle foreach

}
require 'header.php';

?>

<title>Mon Panier 2</title>
</head>
<body>

  <?php  require 'menu.php';?>

  <main>
    <h1>Panier 2</h1>

    <article class="presentation">
      <h2>Mon_panier2</h2>
      <li> <a href= "Notproduit.php">retour au cataloge </a></li>
      <?php if (!empty($_SESSION['info_client'])): ?>
        <p>Panier de :</p>
        <p><?php echo $_COOKIE['info_client'] ?></p>

    <?php else: ?>
      <p>Utilisateur est deconecter ou pas encore inscrie </p>
      <p>pour vous inscrie <a href="NewClient.php">Nouveau Client </a> </p>
      <p>pour vous connecter <a href="Connection.php"> Connection </a> </p>
    <?php endif; ?>

    <h2>lite des article ajouter au panier</h2>

    <?php
          if (!isset($_COOKIE['panier'])) {
            echo"<h3> vautre panier et vide </h3>";

          }
        #afichage ____________________________________________________________________________________
        if ( !empty($_SESSION['info_client']) ) {
          if ( isset($_COOKIE['panier']) AND isset($_COOKIE['totalPanier'])){

          $afchepanier = unserialize($_COOKIE['panier']);

            echo "<p>________ vautre selection  __________</p>";

            foreach ($afchepanier as $id => $value) {
              echo"<br> id :". $id. " : ";
              foreach ($value as $produit => $b) {
                echo "<p> nom : ". $produit. " :</p> ";
                foreach ($b as $prix_unitaire => $quantiter) {
                  echo "<p> prix unitaire : ".$prix_unitaire." € </p> <p> quantiter a comender : ".$quantiter."</p>";
                }
              }
              echo "<p> total ".$produit.": " .$total_uniter = $prix_unitaire * $quantiter ." € </p>";
            }
            echo "<p>_________________________________________________________________</p>";

            echo "<p>tolal payer :".$AficheTotal_a_payer= unserialize($_COOKIE['totalPanier']) ." € <p>";

            echo '<p> Pour suprimer votre panier <a class="suprimer_panier" href="suprimer_panier.php">suprimer</a> </p>';
          }
        }else {
          echo "<p>Utilisateur est deconecter ou pas encore inscrie </p>";
          echo "<p>pour vous inscrie <a href='NewClient.php'>Nouveau Client </a> </p>";
          echo "<p>pour vous connecter <a href='Connection.php'> Connection </a> </p>";

        }



     ?>



 </article>
 </main>

 <?php require 'footeur.php';  ?>
