<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>les fichier en php</title>
  </head>
  <body>
    <p>Ouvrire un fichier tipe txt en php</p>
    <table border=1>
      <thead>
        <tr>
          <th>mode</th>
          <th>description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>r</td>
          <td>Ouvre un fichier enlecture seule pas de modification posible.</td>
        </tr>
        <tr>
          <td>r+</td>
          <td>Ouvre un fichir en lecture et en ecriture.<br> Si le fichier exite pas encre un nouveu .</td>
        </tr>
        <tr>
          <td>a</td>
          <td>Ouvre un fichier en écriture et en lecture.<br>Si le fichier n'exite pas, en crée un nouveau.</td>
        </tr>
        <tr>
          <td>a+</td>
          <td>	Ouvre un fichier en lecture.<br>Si le fichier n'exite pas, en crée un nouveau.</td>
        </tr>
        <tr>
          <td>w</td>
          <td>Ouvre un fichier en écriture seule.<br>
            Si le fichier existe deja suprime le contenue préexitant.<br>
            Si le fichier n'exite pas, en crée un nouveau</td>
        </tr>
        <tr>
          <td>w+</td>
          <td>Ouvre un fichier en lectur et écriture seule.<br>
            Si le fichier existe deja suprime le contenue préexitant.<br>
            Si le fichier n'exite pas, en crée un nouveau</td>
        </tr>
        <tr>
          <td>x</td>
          <td>Crée un nouveau fichier ouvre en ecriture seulement .<br>
             Retoune la valeure FALSE si le fichier exite deja</td>
        </tr>
        <tr>
          <td>x+</td>
          <td>Cré un nouveau fichier ouvre en lecture et en ecriture.<br>
            Retoune la valeure FALSE si le fichier exite deja</td>
        </tr>
      </tbody>

    </table>
    <?php
    echo "<br>";
      $definition = fopen("definition-php.txt","r+");
      $afichagedef=fread($definition,1000);
      echo $afichagedef;
      fclose($definition);

     ?>
  </body>
</html>
