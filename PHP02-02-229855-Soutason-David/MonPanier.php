<?php
session_start();
require 'header.php';

if(!empty($_SESSION['info_client'])){
  setcookie('info_client',$_SESSION['info_client'],time()+60*60*24*15,null,null,false,true);
}
if (isset($_POST['ajouter'])) {
  $qte = $_POST['quantiter'];
  $id_produit = $_POST['ajouter'];
  $n= "";
  $_SESSION['ajout'][$id_produit] = $qte;

  $prodAjou=$_SESSION['ajout'];

  foreach ($prodAjou as $id_p => $quantiter_produit ){
    $requet ='SELECT * FROM produit WHERE id_produit='.$id_p;
    $result = $mysqli->query($requet);

    while ($row = $result->fetch_array(MYSQLI_BOTH) ){
      $id_produitc = $row['id_produit'];
      $BD_nom_produitc = $row['nom_produit'];
      $BD_prix_produitc = $row['prix_produit'];
    }
    #creation dune session info produits
    $n++ ; #incrémentateur de nombre produtui a ajouter

    $table['produit'] = '<br> <p>id produit: '.$id_p.'<p>
    </p>'.$BD_nom_produitc.'</p>
    <p> quantiter: '.$quantiter_produit .'</p>
    <p> prix unitaire:'.$BD_prix_produitc.'</p>
    <p> total_produit = '.$total_produit = $BD_prix_produitc * $quantiter_produit .'</p>
    <p>nombre de produit ajouter: '.$n.' </p> <br>' ;

    $_SESSION['produits'][$n]= $table['produit'];


  }
}


?>
<title>Mon Panier</title>
</head>
<body>

  <?php  require 'menu.php';  ?>

  <main>
    <h1>Panier</h1>

    <article class="presentation">
      <h2>Mon_panier</h2>

      <?php if (!empty($_SESSION['info_client'])): ?>
        <p>Panier de :</p>
        <p><?php echo $_COOKIE['info_client'] ?></p>


        <?php
        if (!empty($_SESSION['produits'])){


        $b = 0;


        while ($n > $b) {
          $b++;
        $_SESSION['produits'][$b];

        echo $_SESSION['produits'][$b];

        }
      }

        ?>

      <?php else: ?>
        <p>Utilisateur est deconecter ou pas encore inscrie </p>
        <p>pour vous inscrie <a href="NewClient.php">Nouveau Client </a> </p>
        <p>pour vous connecter <a href="Connection.php"> Connection </a> </p>
      <?php endif; ?>



    </article>
  </main>

  <?php require 'footeur.php';  ?>
