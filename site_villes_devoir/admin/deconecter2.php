<?php
session_start();
session_destroy();
$mesage = "vous vous éte bien deconecter de l'éspase administration : <button ><a href='index.php'> Accueil </a></button >";

 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="icon" href="./image/icon.ico">
      <link rel="stylesheet" href="./css/style.css">
      <title>deconecter</title>
  </head>
  <body>
      <h1> <?php echo $mesage; ?> </h1>

  </body>
</html>
