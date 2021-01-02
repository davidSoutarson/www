<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="pages webe a bute pedagogique pour mieux metriser les langage du webe html php css sql jS">
    <title>DS-TP-webeLangage</title>
  </head>
  <body>
    <h1>traveau pratique</h1>
    <p>david - Soutarson</p>
    <h2>tes ton is les Base de PHP</h2>

    <?php
    //cecie se pase apprer dans laprentisage
    // includ
    include ("menuHeader.php");
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

    echo "<br> une varible peut stocker une chaine de caracter un nombre entier int un ; <br>
    nonbre desimale float ou un boulein bool true or false ses mots sons ecrit sans guillemets <br>";

    $vrai = true;
    echo 'resuta:' .$vrai. ':et le resuta de $vrai <br>';
    $faut = false;
    echo 'resulta:' .$faut. ':et le resuta de $faut <br>';

    echo "aficcher une date <br>";
    echo 'Date actuelle :' .date('d-m-Y').'<br>';
    echo 'date autrement :' .date('D/M/Y').'<br>';
     ?>
    <br> <br> <br>
    <form class="" action="index.html" method="post">
      <input type="text" name="chanteste" value="champTextImput">
    </form>
    <h2>Un site webe ne dois jamet rebler a ca </h2>
    <p>il sagie de travaille en locale. dans un bute pedagogique conten un demo
      des mosibiliter de basse des webe Langage</p>
      <button type="button" name="button"> Seryeu viste le menu </button>
    <?php
    include ("footeur.php");
     ?>

    </form>
  </body>
</html>
