<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

        echo strlen ("Bonjour à tous").'<br>';
        echo str_word_count ("Bonjour à tous",0,'à').'<br>';
        echo str_word_count ("Salut l' ami").'<br>';
        echo str_word_count ("Bonjour a tous ").'<br>';

        echo str_repeat ("Bonjour <br> ",7);

        $texte = "Bonjour, comment allez-vous ?";
        echo str_ireplace ("bonjour","Bonsoir",$texte,$i);
        echo '<br> Nombre de remplacements : '.$i.'<br>';

        $minmaj = "Bonjour, Vous aLLez bIEN ?";
        echo strtolower ($minmaj).'<br>';
        echo strtoupper ($minmaj).'<br>';

        echo strpos("Bonjour","o");
        echo strpos("Bonjour a tous","tous");
        echo strpos("Bonjour","e");
     ?>

  </body>
</html>
