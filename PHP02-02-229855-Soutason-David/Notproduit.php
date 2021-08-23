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
      <p class="prod">Not produit</p>
      <p>Afiche la lisete de tout not produit et leur infomation</p>

        <?php foreach ($produitNIP as $id => $b): ?>
          <div class="produit">
            <form class="" action="" method="post">

            <?php echo "<p>".$id. "</p>"?>

            <?php foreach ($b as $nom => $prix): ?>

            <?php
              echo "<p>".$nom. "</p>";

              echo"<p> " .$prix. ".00 € </p>";
            ?>
            <?php endforeach; ?>

              <button type="submit" name="ajouter">Ajouter au panier</button>
            </form>
          </div>

        <?php endforeach; ?>

    </article>
 </main>

 <?php  require 'footeur.php';  ?>
