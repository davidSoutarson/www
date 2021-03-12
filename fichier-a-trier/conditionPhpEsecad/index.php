<?php
$a = 3;
$b = 8;

$c = "opérateurs d’assignation";
$v = "opérateurs de comparaison";
$w = "opérateurs de calcul";
$m = "opérateurs combinés";
$n = "opérateurs logiques.";

$total = $a + $b;

echo "<p> les operatuer </p>";
echo "<ul>
        <li>Les opérateurs sont de 5 types :</li>
        <li>$1= opérateurs d’assignation;</li>
        <li>$2= opérateurs de comparaison;</li>
        <li>$3= opérateurs de calcul;</li>
        <li>$4= opérateurs combinés ;</li>
        <li>$5= opérateurs logiques.</li>
</ul>";




if ($a > $b) //si $a est plus grand que $b
{
  echo "les conditions if else </br>";
  echo $a; // afichra $a
}

else {
  echo "les conditions if else </br>";
  echo $b; // si non aficher $b
}

if (($total > 10) AND ($total < 15))
{
  echo "</br> totale et superieur a 10 et inferieur à 15 </br>";
  echo $total .'<br>';
}

echo "les boucle";
echo "boucle while <br>";

while ($a != 0)
{
  echo "a: nes pas zero = ";
  echo  $a .'<br>';
  $a--;
}
if ($a == 0)
{
  echo "a: est egale a zero = $a <br>";
}
echo "mois est plus <br>";
while ($a != 10)
{
  echo  $a .'<br>';
  $a++;
}
echo $a ."stop <br>";
while ($a != 0)
{
  echo  $a .'<br>';
  $a--;
}

echo "<br> une petite pause <br>";
echo "<br> boucle: for <br>";
for($i = 1; $i < 5; $i++)
{
  echo "<br> la variable i veau: $i <br>";
  if($i == 3)
  {
    echo "<h1> ces cool </h1>";
  }
}



 ?>
