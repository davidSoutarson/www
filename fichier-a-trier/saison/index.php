<?php
$seasonName=" printemps ";
$seasonDescription='Le printemps est l’une des quatre saisons des
zones tempérées, suivant l’hiver et précédant l’été. Le printemps se
caractérise par un radoucissement du temps, la fonte des neiges, le
bourgeonnement et la floraison des plantes.';
$seasonImage="printemps.JPG";
 ?>

 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style.css">
     <title><?php echo $seasonName ; ?></title>
   </head>
   <body>
     <h1><?php echo $seasonName; ?></h1>
     <img src="<?php echo $seasonImage ?>" alt="<?php echo $seasonName ;?>">
     <p><?php echo $seasonDescription ; ?></p>

     <!--faire un article classe= "printemps" avec un div classe= "contenaire"
   et tout geres de par la getion des boite -->
   </body>
 </html>
