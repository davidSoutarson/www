<?php
session_start();
setcookie('info_client',$_SESSION['info_client'],time()+60*60*24*15,null,null,false,true);

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
      <p>Panier de :</p>
      <p><?php echo $_COOKIE['info_client'] ?></p>

    </article>
 </main>

 <?php  require 'footeur.php';  ?>
