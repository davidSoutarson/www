<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function Bonjour()
      {
        //code executer par la fonction
        echo "Bonjour a touse :)";
      }
      Bonjour();

      function Bonjourutilisateur($prenom)
      {
        echo '<br> Bonjour ' .$prenom. '!';
      }

      Bonjourutilisateur('pierre');

      function NomAge($nom,$age)
      {
        echo '<br>' .$nom.' a '.$age.' ans ';
      }

      NomAge('David', 35);

      echo "<br>__________ les functin avec return ________<br>";
      #___________________

      function DireBonjour(){
        return"Bonjour";
      }

      function DireBonsoire(){
        echo"Bonsoire";
      }

      $bonjour = DireBonjour();
      $bonsoir = DireBonsoire();#icie la fontion et apeler

      echo $bonjour;
      echo $bonsoir;# notre variable et vide 

     ?>

  </body>
</html>
