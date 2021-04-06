<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fontions date /temps </title>
  </head>
  <body>
    <?php
echo "<p>unixe time tampe 01/01/1970 a 00:00 GMT . la fonction time() retourene le nombre de segomde écouler depuit</p> ";

      echo time();

echo "<p> lafontion date () vas nous pertre obtenier une date sous le formt soueter </p>";

echo '<table border=1>
<th>la fontions date() :</th>
<tr>
  <td>sintaxe</td>
  <td>format</td>
  <td>utilisation</td>
  <td>Afichage</td>
</tr>
<tr>
  <td>date("d/m/y")</td>
  <td></td>
  <td></td>
  <td>'.date('d/m/y').'</td>
</tr>
<tr>
  <td>date("l")</td>
  <td></td>
  <td></td>
  <td>'.date("l").'</td>
</tr>
<tr>
  <td>date("h:i:s")</td>
  <td></td>
  <td></td>
  <td>'.date('h:i:s').'</td>
</tr>
<tr>
  <td>date("H:i:s")</td>
  <td></td>
  <td></td>
  <td>'.date('H:i:s').'</td>
</tr>
<tr>
  <td>date("d-m-Y",1100000000)</td>
  <td></td>
  <td></td>
  <td>'.date('d-m-Y',1100000000).'</td>
</tr>

</table>';

echo "<h2> formater les date en fr </h2>";

  $jour = array (
    "",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
    "Dimanche",
  );

  $mois = array(
    "",
    "Janvier",
    "Fevrier",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Désembre",);

    echo "<h3> 01 metode avec des tablaux</h3>";

    $datefr = $jour[date("N")].' '.date("d"). ' ' .$mois[date("n")]. ' '. date("Y");
    echo $datefr;

    echo "<h3> 02 metode avec setlocale </h3>";

      setlocale(LC_TIME,'French');

      echo '<p> nous sommes le ' .strftime('%A %d %B %Y').'</p>';
      echo "Il est actuelement " .strftime('%H : %M : %S');

    echo "<h2> verifier une date valid</h2>";
      echo "<h3>metode de verification avec checkdate() et if /else </h3>";
#___________declaration__________
$date1 = checkdate(12,31,2021);
$date2 = checkdate(15,31,2021);
$date3 = checkdate(01,25,-100);
#___________Verification__________

      if ($date1) {
        echo "la date est valide ! <br>";
      }
      else
      {
        echo "la date n'est pas valide <br>";
      }
      if ($date2) {
        echo "la date est valide ! <br>";
      }
      else
      {
        echo "la date n'est pas valide <br>";
      }
      if ($date3) {
            echo "la date est valide ! <br>";
            }
      else
      {
        echo "la date n'est pas valide <br>";
      }

      echo "<h2>  getdate() </h2>";

      echo "<pre>";
      print_r(getdate());
      echo "</pre>";
      echo "<br>___________  __________  ___________ <br>";
      echo "<pre>";
      print_r(getdate(1));
      echo "</pre>";
     ?>

  </body>
</html>
