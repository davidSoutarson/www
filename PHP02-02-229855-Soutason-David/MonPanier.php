<?php
session_start();
if(!empty($_SESSION['info_client'])){
setcookie('info_client',$_SESSION['info_client'],time()+60*60*24*15,null,null,false,true);
}
 require 'header.php';
 if (isset($_POST['ajouter'])) {

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
    <?php else: ?>
      <p>Utilisateur est deconecter ou pas encore inscrie </p>
      <p>pour vous inscrie <a href="NewClient.php">Nouveau Client </a> </p>
      <p>pour vous connecter <a href="Connection.php"> Connection </a> </p>
    <?php endif; ?>

    </article>
 </main>

 <?php  require 'footeur.php';  ?>
