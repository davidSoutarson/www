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

    echo "Grase au varible nous pour fair des teste conditionelle ex: if (\$age == < 18){\echo \"vous naver pas lage requi pour ...\"; } <br>";

    echo "aficcher une date <br>";
    echo 'Date actuelle :' .date('d-m-Y').'<br>';
    echo 'date autrement :' .date('D/M/Y').'<br>';
    echo 'A l\'anglise :' .date('Y.m.d'). '<br>';
    echo 'jour :' .date('l d'). '<br>';
    echo 'Date complete :' .date('d/m/y H:i:s'). '<br>';
    date_default_timezone_set("Europe/Paris");//choix du fuseaux horaires Supporté
    echo 'heur hiver:' .date('H/i/s'). '<br>';
    echo 'Date complete :' .date('d/m/y H:i:s'). '<br>';
    echo 'Date en tout letre :' .date('l d M Y'). '<br>';



    echo "<br> <br> <br> une traduction de la date en Francai a laide de tableau <br>";

    #1er ecrie une variable contenent un tableau des jours apeler:$jour
    #nous atribuon une chaine de cacter au premier element de notre tableaun pour fasiliter le formatage de la date par la suite
    $jour = array('','Lundi','Mardi','Mercredi','jeudi','Vendredi','Samedi','Dimanche');//nous avons fais en sort que lindex 0 du tableau sois vide
    #2eme ecrie une variable contenent un tableau des Mois apeler:$mois
    $mois = array('','Janvier','Fevrier','Mars','Avril','Mai','juin','juiller','Août','Septembre','Octobre','Novembre','Décembre');//nous avons fais en sort que lindex 0 du tableau sois vide
    #3eme recuperation de la date a laide des cle index de not tableau
    echo $jour[date('N')].' '.date('d'). ' ' .$mois[date('n')]. ' ' .date('Y'). '<br>';

  #ou alede de tableau sans chine vide mes iterent a partire de -1: [('N')-1]
  echo "ou alede de tableau sans chaine vide mes iterent a partire de -1: [('N')-1] voire script <br>";

    $jour = array( 'Lundi','Mardi','Mercredi','jeudi','Vendredi','Samedi','Dimanche');//nous avons fais en sort que lindex 0 du tableau sois vide
    #2eme ecrie une variable contenent un tableau des Mois apeler:$mois
    $mois = array('Janvier','Fevrier','Mars','Avril','Mai','juin','juiller','Août','Septembre','Octobre','Novembre','Décembre');//nous avons fais en sort que lindex 0 du tableau sois vide
    #3eme recuperation de la date a laide des cle index de not tableau
    echo $jour[date('N')-1].' '.date('d'). ' ' .$mois[date('n')-1]. ' ' .date('Y'). '';

    echo "<h2>Les tablaux </h2> <br>";

    $saison  = array(0 => 'Eté', 1=> 'Automne', 2 => 'Hiver' , 3 => 'Printemps');

    echo $saison[2]. '<br>';

    echo $saison[0]. '<br>' .$saison [1]. '<br>'.$saison [2]. '<br>'.$saison [3]. '<br>';

    echo $saison [('0').('1').('2').('3')];



     ?>
    <br> <br> <br>
    <form class="" action="index.html" method="post">
      <input type="text" name="chanteste" value="champTextImput">
    </form>
    <h2>Un site webe ne dois jamet rebler a ca </h2>
    <p>il sagie de travaille en locale. dans un bute pedagogique conten un demo
      des posibiliter de basse des webe Langage</p>
      <button type="button" name="button"> Seryeu viste le menu </button>
    <?php
    include ("footeur.php");
     ?>

    </form>
  </body>
</html>
