<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>traveau pratique</h1>
    <p>david - Soutarson</p>
    <?php
    // du code php
    echo "helo world!<br>";
    echo 'je suis un chaine ecrite en simple cote voire code source<br>';
    echo 'je suis une chaine qui contien un apostrophes echaper avec: \ :antislash l\' simple côte voire code: source<br>';
    echo "<br> La concatenation <br><br>";
    //la concatenation
    $sport = 'basquet';
    echo 'Nous pratiquon le ' . $sport;
    $saison = 'automne' ;
    echo '<br> les feuilles tombent en <strong>' . $saison . '</strong>';

    echo '<br> <br> <strong> /* concatenation varible / varible */ </strong> <br>';

    $first = 'Hello';
    $second = 'world';
    echo $first . $second ;

     ?>

  </body>
</html>
