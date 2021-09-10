<?php
session_start();
if(!empty($_SESSION['info_client'])){
setcookie('info_client',$_SESSION['info_client'],time()+60*60*24*15,null,null,false,true);
}
 require 'header.php';



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


    <?php else: ?>
      <p>Utilisateur est deconecter ou pas encore inscrie </p>
      <p>pour vous inscrie <a href="NewClient.php">Nouveau Client </a> </p>
      <p>pour vous connecter <a href="Connection.php"> Connection </a> </p>
    <?php endif; ?>

    <?php
    if (isset($_POST['ajouter'])) {
      $qte = $_POST['quantiter'];
      $id_produit = $_POST['ajouter'];

      $_SESSION['panier'][$id_produit] = $qte;

      $prodAjou=$_SESSION['panier'];

      foreach ($prodAjou as $id_p => $quantiter_produit ){
        echo "<p>______________________________ </p> ";
        echo 'id produit: '.$id_p.'<br> quantiter: '.$quantiter_produit .'<br>';
        $requet ='SELECT * FROM produit WHERE id_produit='.$id_p;
        $result = $mysqli->query($requet);

        while ($row = $result->fetch_array(MYSQLI_BOTH) ){
          #$id_produitc = $row['id_produit'];
          $BD_nom_produitc = $row['nom_produit'];
          $BD_prix_produitc = $row['prix_produit'];
        }

        echo $BD_nom_produitc."<br>";
        echo "prix unitaire:".$BD_prix_produitc."<br>";
        echo "total_produit = ".$total_produit = $BD_prix_produitc * $quantiter_produit ."<br>";
        echo "<p>______________________________ </p> ";
      }

    }
     ?>




    </article>
 </main>

 <?php  require 'footeur.php';  ?>
