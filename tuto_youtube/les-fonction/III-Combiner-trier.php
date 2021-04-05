<h2>la fonfontion array_marge()</h2>
<p>cette fontion vas prendre autemps agument que de tableaux que lon veux combiner entre eux</p>

<?php
$alpha = array('a','b' );
$beta = array('c','d' );

$omega = array_merge($alpha,$beta);
echo "<h2>la fontion  array_combine() </h2> <p>cette fontion crer un tablaux asosiatife apartire de 2 tableaux numeroter.<br>les deux tableaux doive avoire le maime nobre d'élement<p>";
$hipsilon = array_combine($alpha,$beta);//les deux tableaux doive avoire le maime nobre d'élement

print_r($omega);
echo "<br>";
print_r($hipsilon);

 ?>
<h2> la fonction array_unique() </h2>
<p>vas suprimer les doublon d'un tableaux <br> cette fontion et sensible a la casse saufe pour les chifre '4' 4.</p>

<?php
  $prenom = array('david' ,'paul','myriam','pierre','paul' );

  print_r(array_unique($prenom));
 ?>
<h2> la fonction sort() sont oposer rsort() </h2>
<p> Cette fontion vas nous permtre dordoner les valeur d'un tableaux </p>
<p> Cette fontion ne renvois pas un nouveau tableau mais:<br> Modifie le tableau de base</p>

<?php
  $prenom = array('david' ,'zoer','myriam','pierre','paul' );
  sort($prenom);
  print_r($prenom);
  echo "<br>";
  rsort($prenom);
  print_r($prenom);

 ?>

 <h2>Ordoner de tableaux asosiatife</h2>
 <h3>Les fontions ksort() krsort() asort() arsort() </h3>

 <table border= 1>
   <th>clef/valeur</th>
   <th>ordre croisant</th>
   <th>ordre decroisant</th>
   <tr>
     <td>clef</td>
     <td>ksort()</td>
      <td>krsort()</td>
   </tr>
   <tr>
     <td>valeur</td>
     <td>asort()</td>
     <td>arsort()</td>
   </tr>
 </table>

<?php
 $agenom = array('david'=>34,'pierre'=>44,'myriam'=>29);
   echo"<br>--------------------------------------------<br>";
 ksort($agenom);
 print_r($agenom);
 echo"<br>";
 krsort($agenom);
 print_r($agenom);
  echo"<br>--------------------------------------------<br>";
  asort($agenom);
  print_r($agenom);
  echo"<br>";
  arsort($agenom);
  print_r($agenom);


 ?>
