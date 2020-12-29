
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>les variabe en php</title>
   </head>
   <body>
     <?php
     /*je suis un ficher contenen des variable escuter en php*/
     $departement = "var";
     $chiffre = 83;

     echo"teste variable <br/>";
     $nombre = 10;/*monbre d'oeuf dans la boite*/
     $oeuf = 1;/*nombre d'oeuf*/
     $prix = 0.13;/*prix d'un nombre d'oeuf*/
     $boite_oeuf = ($nombre / $oeuf )* $prix;
     $nombre_de_boite = 2;
     $x_boite = $boite_oeuf * $nombre_de_boite;
     echo "le prix de la boite de 10 oeuf et de : $boite_oeuf €<br/>";
     echo 'Le prix de 2 boite de 10 oeuf et de : '.$x_boite.'€ <br>';//br avec ou sans / //

     /*opération simple sur les varibes*/

     $nombre1 = 5;
     $nombre2 = 3;

     $addition = $nombre1 + $nombre2;
     $soustraction = $nombre1 - $nombre2;
     $multiplication = $nombre1 * $nombre2;
     $division = $nombre1 / $nombre2;
     $modulo = $nombre1 % $nombre2;

     echo 'Addition:'.$addition.'<br/>';
     echo 'Soustraction:'.$soustraction.'<br/>';
     echo 'Multiplication:'.$multiplication.'<br/>';
     echo 'Division:'.$division.'<br/>';
     echo 'Modulo:'.$modulo.'<br/>';

     echo $nombre1.'+'.$nombre2;

     /*les varible de type array
     il permette de stocer plusieur tipe de valeure
     il exite  3 type tableau
      indexer
      atiosiatif
      mutidimentionelle
     */
     echo '<p> les varible de type array<br/>
     il permette de stocer plusieur tipe de valeure<br/>
     il exite  3 type tableau<br/>
     indexer<br/>atiosiatif<br/>
     mutidimentionelle </p>';


     /* les condition en php
     _ la conditon << if >>
     _ la condition << if... else >>
     _ la condition << switch >>

     */

     echo '
     <h3>les condition en php </h3>
     <p>elle permette de rendre la page dinamique </p>
     <ul>
        <li>  la conditon  if   </li>
        <li>  la condition  if... else  </li>
        <li>  la condition  switch  </li>
     </ul>
     <p> les simboles de comparaison en php: </p>
     <ul>
        <li>    == : Est égal </li>
        <li>    >  : Est strictement supérieur à </li>
        <li>    <  : Est strictement infrérieur à </li>
        <li>    >= : Est supérieur ou égal à </li>
        <li>    <= : Est infrérieur ou égal à </li>
        <li>    != : Est diférent de </li>
     </ul>';

     /* la condition if */

     $heure_conextion = 17;
    if ($heure_conextion < 18)//condition
     {
      echo 'passez un bonne jourenée <br/>';
    }

    /* la condition if else */

    $heure_conextion = 20;
   if ($heure_conextion < 18)//condition
    {
     echo 'passez un bonne jourenée <br/>';
   }
   else {
    echo'passez une bonne soirée <br/>';
   }


   $heure_conextion = 9;
  if ($heure_conextion < 18)//condition
   {
    echo 'passez un bonne jourenée <br/>';
    $jouner = 'oui';
  }
  else {
   echo'passez une bonne soirée <br/>';
   $jouner = 'non';
  }

echo 'fait il jour? La reponse et :'.$jouner.'.<br>';


      /*condition if elseif  else */

      $note = 12;
      if ($note < 10) {
        echo "vous n'avez pas eu la moyenne";
      }
      elseif ($note == 10) {
        echo'vous avez eu la moyenne';
      }
      else {
        echo 'vous avez eu plus que la moyenne';
      }

      /*les double condition
      AND &&
      Or  ||
      */


?>

   </body>
 </html>
