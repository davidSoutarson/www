<?php
 require 'header.php';

 $requet ='SELECT * FROM produit';
 $result = $mysqli->query($requet);

while ($row = $result->fetch_array(MYSQLI_BOTH) ){
  $id_produit = $row['id_produit'];
  $nom_produit = $row['nom_produit'];
  $prix_produit = $row['prix_produit'];
  

  $produitNIP[$id_produit][$nom_produit] = $prix_produit;

}

 ?>
<title>Not produit</title>
</head>
<body>
<div id='wrapeur'>

</div>
 <?php  require 'menu.php';  ?>

 <main>
    <h1>Not produit</h1>

    <article class="presentation">
      <div class="entete">
      <h2>Faite vautre choi parmie not produit</h2>
      <p>ice vous pouvez ajoutere les produits au panier.</p>
      <p>Vautre panier sera sovegader pandant 15 joure</p>
      </div>
      <p class="acroche">Afiche la lisete de tout not produit et leur infomation</p>

        <?php foreach ($produitNIP as $id => $b): ?>
          <div class="produit">
            <form class="" action="Mon_panier.php" method="post">
              <ul>
            <?php foreach ($b as $nom => $prix): ?>

            <?php
              echo "<li>".$nom."</li>";

               $prix = number_format($prix,2,',','');

               echo "<li>".$prix."</li>";
            ?>
            <?php endforeach; ?>

                </ul>
                <?php  $id ?>
              <button class="btnAjP" type="submit" name="ajouter" value=<?php echo $id; ?>>Ajouter au panier</button>

            </form>
          </div>

        <?php endforeach; ?>

        <?php var_dump($_POST) ?>

    </article>
 </main>
