<?php
 require 'header.php';
#id_panier
#id_client <== Table client === id client
#id_produit	<== Table produit === id_produit
#quantier_desirer <=> Table produit:	quantier_produit
#prix_produit	<= Table produit
#total_article
#total_prix <= table produit === id_prix_produit + id_prix_produit

 ?>
<title>Mon Panier</title>
</head>
<body>

 <?php  require 'menu.php';  ?>

 <main>
    <h1>Panier</h1>

    <article class="presentation">
      <h2>Mon_panier</h2>


      <p>coordoner client:</p>
      <p>nom: , prenom:</p>
      <p>email:</p>
      <p>vautre litete de produit comender :</p>
      <p>nom_produit: prix_uniter: quantiter desisrer:</p>
      <p>quantiter total_article:</p>
      <p>total_prix:</p>


    </article>
 </main>

 <?php  require 'footeur.php';  ?>
