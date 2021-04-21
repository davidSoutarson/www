<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>les comstente en php</title>
  </head>
  <body>
    <h2>Quese q'une constante.</h2>
    <p>La valeur d'une constante est constante(execption : constantes "magiques") <br>
    Le nom des constante est sensible a la casse <br>
    Par convention, on écrit les constates ans majuscules <br>
    Le nom d'une constante commnce soit par un underscore (constantes "magiques) soit par une lettre</p>

    <p>Les constante sont utiser en programation comme identifeur leur valeur et constante.  Un nom representant une valeur simple </p>


    <table border="1">
      <th> ############ </th>
      <th>Les constantes </th>
      <th> EX utilisation des constantes</th>
      <tr>
        <td>sintaxe</td>
        <td>define()</td>
        <td>define("BIENVENUE","Bienvenue sur mon site !")</td>
      </tr>
      <tr>
        <td>sintaxe</td>
        <td>define("NOM-DE-LA-CONSTANTE","contenue de la constante")</td>
        <td>les constante a la diferanse des variabe sont toujour acsécible de manier globale dans un script</td>
      </tr>
      <tr>
        <td>sintaxe</td>
        <td>define("BIENVENUE","Bienvenue sur mon site !"))</td>
        <td>echo BIENVENUE;<br> afichera: Bienvenue sur mon site ! </td>
      </tr>
      <tr>
        <td>Ou / Pour quoi?</td>
        <td>Ou vas on utiliser les constantes ?<br>
        Pour quoi utiser des constante?</td>
        <td>Nous allon utiliser les constante dans les ficher de configuration d'un site .<br>
          Ou pour faire des appele a notre base de donner. <br>
          Les constante peuve etre une tres bone solution pour creer un site Mulite lingue </td>
      </tr>
    </table>
    <h2>EX utilisation des constantes</h2>
    <p>     $a = "Bonjour"; // declaration claration d'une variabe<br>
            define("NOMBRE", 4);//declaration d'une constante comtenant chifre 4<br><br>

            // ecriture d'une fonction sans argument<br>
            function portee() {<br>
              # echo $a;// Comenter pour eviter de génerer une éreure : $a nes pas declarer dans la fonction <br>
              echo NOMBRE;<br>
              echo "<br>";<br>
              $b = 36;<br>
              echo $b;<br>
            }<br><br>

            portee(); //appele de fonction </p>
            echo $b; // nafiche rien car $b nes acsécible que depui la fonction
            <p>ereure retouner par echo $a : <strong>Notice: Undefined variable: a in E:\wamp64\www\tuto_youtube\les Comsetante\les-constante.php on line 61</strong></p>
            <p>ereure retouner par echo $b : <strong>Notice: Undefined variable: b in E:\wamp64\www\tuto_youtube\les Comsetante\les-constante.php on line 69</strong></p>

            <p>resulta</p>
      <?php
          $a = "Bonjour"; // declaration claration d'une variabe
          define("NOMBRE", 4);//declaration d'une constante comtenant chifre 4

          // ecriture d'une fonction sans argument
          function portee() {
            # echo $a; // comenter pour eviter de generer une éreure
            echo NOMBRE;
            echo "<br>";
            $b = 36;
            echo $b;
          }

          portee(); //appele de fonction
          # echo $b;
       ?>

  </body>
</html>
