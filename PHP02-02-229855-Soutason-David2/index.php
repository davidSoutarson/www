<?php
 require 'header.php';



 ?>
<title>accueil</title>
</head>
<body>




 <?php  require 'menu.php';  ?>

<div id="wrapeur">
 <main>
    <h1>Accueil</h1>

    <article class="presentation">
      <h2>presentation</h2>
      <div class="entete">
      <p>PHP intermediaire : devoir 2</p>
      <p>Formation : Integrateur-developpeur</p>
      <p>Soutarson David </p>
      <p>n° 229855</p>
      </div>
      <p class="acroche">Bonjoure se site et un exercie pour la formation Integrateur-developpeur esecad groupe skill & your</p>

      <h3>La demende : realisation d'un systeme de panier pour un site e-commerce</h3>
      <ol>
        <li>Realiser un systeme permetent a un internaute d'enregiter un panier au cours de sa na vigation <br> dans un site de type e-commerce </li>

        <li>une page doit lister les produits et leur prix  permettre de les ajouter au panier. <br>Le panier lite les produits selectioner et afiche le montent total. </li>
        <li>Le panier doit etre sovegader pandant deux semaine .</li>
      </ol>

      <h4>Conseils </h4>
      <p> Stoker les information consenet le panier dans un cookie  valable 15 joure</p>

      <div class="mon-devoir">
      <h4 >Ce site contient:</h4>
      <p> - se site s'aticule autour de base de doner projet_ecommerce.
        <br> - un menu de navigation : accueil | not produits | incription & conction | mon panier
        <br> 1 la page d'accueil: Presente le site
        <br>
        <br> - Simplification pour lexrcice respec de la consingne.
        <br> . se site ne dipose pas espase administrate : pas d'éition de produits pas de suprestion de produits pas de bar de recherche ex .
        <br>
        <br> 2 la page Not produit: lite tout les produit proposer et permetent de les ajouter au panier :
        <br>
        <br> - j'ai choisie de creer une base de doner qui se nomme projet_ecommerce se site s'aticule autour de cette base: elle me permetent de Stoker et de pacourie les dononer de manier dinamique.
        <br>
        <br>la table  produit: contient tout les produit et leur information : dans les champ id_produit,nom_produit,prix_produit,quantiter_produit
        <br> . pour liter les produit j'ai choisie de pacourie et aficher table nomer produit
        <br> pour l'aficahege ce fait a laide d une div repetable par id_produit/nombre de produits par une boucle foreach
        <br>
        <br>la table client: permet lenregitement et la conection de client
        <br>- elle a besoint deux fomulaire nouveau client et conction
        <br>- cette table permet ausie de crer un ensenbe coerant client produit panier
        <br>
        <br>3 la page Mon panier contient lafichage de cookie de navigation valable 15 jour
        <br> si le client et coneter et ou inscrit , quil ajoute des produit au panier
        <br> - un cookie contient les information client nom premon
        <br> - un cookie contient le panier client
      </p>
      </div>

    </article>
 </main>
</div>

 <?php  require 'footeur.php';  ?>
