<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf8">
    <title>les tableaux en php</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
      <p>!!!on pensera a unclure le menu de navigation  prinsipale icie!!!</p>
    </header>
    <main>
      <h1>les tableaux Multidimention php</h1>
      <p>david ssoutarson vous propose une demo de tablaeux</p>

      <p>voici deux sintax pour les tableaux a mutidimention</p>

      <p>

      </p>

      <?php
        echo " Ci desous cecie est aficher par le php : <br><br>";

        $membres=array(
           array('Pierre', 24 , 'pierre.giraud@edhec.com' ),
           array('Paul', 22 , 'pole.dubreuile@live.com' ),
           array('Jacquot', 36 , 'jacquot@gmail.com' ),
          );

          echo $membres[0][0]. ' a '.$membres[0][1]. ' ans. Son mail est : ' .$membres[0][2]. '<br>';
          echo $membres[1][0]. ' a '.$membres[1][1]. ' ans. Son mail est : ' .$membres[1][2]. '<br>';
          echo $membres[2][0]. ' a '.$membres[2][1]. ' ans. Son mail est : ' .$membres[2][2]. '<br>';

          for ($ligne = 0; $ligne < 3 ; $ligne++) {
            $membre_no = $ligne+1;
            echo 'Membre numero '.$membre_no. '<br>';
            echo '<ul>';
            
            for ($col=0; $col < 3 ; $col++) {
              echo '<li>'. $membres[$ligne][$col].'</li>';
            }
            echo '</ul>';
          }

       ?>

    </main>
    <footer>
      <p>!!!la nous inseronr le pied de page footer !!! </p>
    </footer>

  </body>
</html>
