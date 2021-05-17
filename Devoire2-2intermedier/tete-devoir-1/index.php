<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo 'devoire intermedier php BD <br>';
    echo "localhost root '' projet_villes";
    echo "<br> ___________________________________ <br>";

    include"inscription.php";


    echo "<br> ___________________________________ <br>";

    include"recherche.php";

    echo "<br> ___________________________________ <br>";
        echo "<h2> resulta </h2>";

        var_dump($_POST);

    echo "<br> ___________________________________ <br>";
     ?>


  </body>
</html>
