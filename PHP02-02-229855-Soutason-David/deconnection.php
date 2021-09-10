<?php
session_start();
session_destroy();
require 'header.php';

$mesage = "vous vous éte bien deconecter : <button ><a href='index.php'> Accueil </a></button >";

 ?>

 <title>Deconection</title>
 </head>
 <body>

   <?php  require 'menu.php';  ?>

   <main>
     <h1>Deconection</h1>

     <article class="presentation">

       <?php echo $mesage; ?>

    </article>
  </main>
  <?php require 'footeur.php'; ?>
