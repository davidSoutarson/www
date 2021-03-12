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
      <h1>les tableaux numeroter php</h1>
      <p>david ssoutarson vous propose une demo de tablaeux</p>

      <p>voici deux sintax pour les tableaux numeroter</p>

      <p>
        //tableau a index automatioque <br>
         $prenom  = array('Pierre','Paul', 'Jacques');<br><br>
        //tabbleau a index manuele<br>
              $pernom [0] = 'Pierre';<br>
              $pernom [1] = 'Paul';<br>
              $pernom [2] = 'Jacques';
      </p>

      <?php
        echo " Ci desous cecie est aficher par le php : <br><br>";

      //tableau a index automatioque
        $prenom  = array('Pierre','Paul', 'Jacques');
      //tabbleau a index manuele
        $pernom [0] = 'Pierre';
        $pernom [1] = 'Paul';
        $pernom [2] = 'Jacques';

        echo $prenom[0]. '<br>';// afiche Pierre

        echo "_______ parcourir ce tableau avec une boucle for _________ <br>";

        for ($i=0; $i <=2 ; $i++) {
          // code a aficher
    //echo pour aficher $prenom nom du tatbleau [varible incrementer tour de boucle] . point pour concatenation <br> pour les retour a la ligne.
          echo $prenom[$i]. '<br>';
        }
        echo "_______ parcourir ce tableau avec une boucle foreach en afichant que la valeur _________ <br>";
        foreach ($prenom as $value) {
          // code...
          echo $value. '<br>';
        }

        echo "_______ parcourir ce tableau avec une boucle foreach en afichant lenseble clef => valeur _________ <br>";
        foreach ($prenom as $kie => $value) {
          // code...
          echo $kie. ' '.$value. '<br>';
        }

       ?>

    </main>
    <footer>
      <p>!!!la nous inseronr le pied de page footer !!! </p>
    </footer>

  </body>
</html>
