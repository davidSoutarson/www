<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf8">
    <title>les tableaux asosiatif en php</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
      <p>!!!on pensera a unclure le menu de navigation  prinsipale icie!!!</p>
    </header>
    <main>
      <h1>les tableaux asosiatif</h1>
      <p>david ssoutarson vous propose une demo de tablaeux</p>

      <p>voici deux sintax pour les tableaux asosiatif</p>

      <p>les tableaux non pas de clef numerique  mes une chaine de caractères.</p>
      <p class="exemple">$age = array('Pierre' => 25 , 'Paul' => 20 , 'Jean' => 32 );</p>

      <P class="exemple">
        $sport ['Pierre'] = 'trail'; <br>
        $sport ['Paul'] = 'natation'; <br>
        $sport ['Jean'] = 'roleur';
      </p>

        <?php
          $age = array('Pierre' => 25 , 'Paul' => 20 , 'Jean' => 32 );

                    //clef     //valeurs
          $sport ['Pierre'] = 'trail';
          $sport ['Paul'] = 'natation';
          $sport ['Jean'] = 'roleur';

      //pour aficher une seul valeurs
          echo 'Age de Pierre : ' .$age['Pierre']. ' ans. <br>';
          echo 'Sport pratiquer par Pierre : ' .$sport['Pierre']. '<br>';

          foreach ($age as $key => $value) {
            // code...
            echo $key. ' a : ' .$value. ' ans. <br>';
          }
          echo "__________________<br>";
          foreach ($sport as $key => $value) {
            // code...
            echo '<br>' .$key. ' pratique : ' .$value. '<br>';
          }
            echo "<br> ________fin_______ <br>";


         ?>

    </main>
    <footer>
      <p>!!!la nous inseronr le pied de page footer !!! </p>
    </footer>

  </body>
</html>
