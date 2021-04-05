<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>include vs requerire en php</title>
  </head>
  <body>
    <?php

      include 'fichier-inclus.php';
      echo "Ce fichier s'afiche avec  include : inclede ne stope pas le programe en cas d'éreure";

      require 'fichier-inclus.php';
      echo "Ce fichier s'afiche avec  require : en ca d'ereure requeri stop le programe";
     ?>
  </body>
</html>
