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

/*if (isset($_POST['ajouter'])) {
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

      $tableau_ajout_prod['colonne_id'] ="<p>". $id_produit."</p>";
      $tableau_ajout_prod['colonne_nom'] ="<p>". $BD_nom_produit."</p>";
      $tableau_ajout_prod['colonne_prix'] = "<p>".(int) $BD_prix_produit."</p>";
      $tableau_ajout_prod['colonne_quantiter'] = "<p>".(int) $quantiter_produit."</p>";
      $tableau_ajout_prod['colonne_total_id'] ="<p>". $BD_prix_produit  * $quantiter_produit."</p>";

      $total[]=  $prix = $BD_prix_produit * $quantiter_produit ;

      $tableau_ajout_prod['colonne_total'] ="<p>". array_sum($total)."</p>";

    }
      $n=0;

      $_SESSION['panier'][$n++] = $tableau_ajout_prod ;


      $xxx = ($_SESSION['panier']);

      echo $_SESSION['panier'] = $xxx;

    }
}*/

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
          <form class="formProduit" action="" method="post">
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
