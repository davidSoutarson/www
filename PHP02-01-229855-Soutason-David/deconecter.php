<?php
session_start();
session_destroy();
$mesage = "vous vous éte bien deconecter : <button ><a href='index.php'> Accueil </a></button >";

 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="icon" href="./image/icon.ico">
    <title>deconecter</title>
      <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
      <h1> <?php echo $mesage; ?> </h1>

  </body>
</html>
