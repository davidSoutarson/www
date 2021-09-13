<?php
session_start();
require 'header.php';

$requet ='SELECT * FROM produit';
$result = $mysqli->query($requet);

while ($row = $result->fetch_array(MYSQLI_BOTH) ){
  $id_produit = $row['id_produit'];
  $nom_produit = $row['nom_produit'];
  $prix_produit = $row['prix_produit'];
  $quantiter_produit = $row['quantiter_produit'];

  $produitINQP[$id_produit][$nom_produit][$quantiter_produit] = $prix_produit;

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


        <?php foreach ($produitINQP as $id => $b): ?>
          <div class="produit">
            <form class="formProduit" action="MonPanier.php" method="post">
              <ul>
                <?php
                  echo "<li class='Lp'>".$id."</li>" ;
                ?>

                <?php foreach ($b as $nom => $quantiter_prix): ?>

                  <?php
                  echo "<li class='Lp'>".$nom."</li>";
                  ?>

                  <?php foreach ($quantiter_prix as $quantiter => $prix): ?>
                    <?php
                      echo "<li class='Lp'> <label for='quantiter'>Quantiter de produit a ajouter au panier:</label>
                      <input type='number' id='quantiter' name='quantiter' value='0' min='1' max='$quantiter' > </li>"
                      ?>

                    <?php
                    #icie je formate le nonbre pour aficher 2 desimale.
                    $prix =number_format($prix,2,',',' ');
                    echo "<li>".$prix."€</li>";
                    ?>

                  <?php endforeach; ?>
                <?php endforeach; ?>

              </ul>

              <button class="btnAjP" type="submit" name="ajouter" value=<?php echo $id; ?>>Ajouter au panier</button>

            </form>
          </div>

      <?php endforeach; ?>
</div>
    </article>
  </main>
