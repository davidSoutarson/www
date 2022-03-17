<?php
  include ('html/header.html');
?>
<div class="wraper">

  <main>
    <article class="lesBasePHP">

      <?php
        include('script-PHP/Les-Bases-PHP.php');
      ?>

    </article>
    <article class="lesBasePHP">

      <h2>les operation php </h2>

      <p>pour ses opration ecrite dans un script php apeler avec include</p>
      <p> jutilise les varable suivante:</p>

      <p>$nombre1 =  5;</p>
      <p>$nombre2 = 3; </p>

      <p>$adition = $nombre1 + $nombre2;</p>
      <p>$soutraction = $nombre1 - $nombre2;</p>
      <p>$multiplication = $nombre1 * $nombre2;</p>
      <p>$division = $nombre1 / $nombre2;</p>
      <p>$modulo = $nombre1 % $nombre2;</p>

      <p>echo $adition. br ;</p>
      <p>echo $soutraction. br ;</p>
      <p>echo $multiplication. br ;</p>
      <p>echo $division. br;</p>
      <p>echo $modulo. br;</p>

      <p>Costatont les resuta aficher avec echo une foit le sripte apeler si desous </p>

      <p> Atention le sigene = et un signe Datributon en php </p>

      <?php
        include('script-PHP/les-operation-PHP.php');
      ?>

    </article>

    <article class="lesBasePHP">
      <h2>les condition en php</h2>

      <p>
        On utilise les condition pour efectuer et aficher diferente ation selon le contexte.<br>

        En php, nous disposon des condition suiventes que nous allons voir ensenble:<br>

        -la condition << if >><br>
        -la condition << if ... else >><br>
        -la condition << if ... elseif ... else >><br>
        - Le switch<br>

        Pour utiliser les  condition , nous allon devoir utiliser les  synboles de compareson suivants:<br>

      </p>

      <table>
      <tr> <td>SYMBOLE</td>  <td>SIGNIFICATION</td> </tr>
      <tr> <td> == </td>  <td>Est égale à</td>  </tr>
      <tr> <td> > </td> <td>  Est stritement supérieur à </td> </tr>
      <tr> <td> < </td> <td>  Est stritement inférieur à </td> </tr>
      <tr> <td> >= </td> <td> Est supérieur ou égale à </td> </tr>
      <tr> <td> <= </td> <td> Est inférieur ou égale à </td> </tr>
      <tr> <td> != </td> <td> Est différent de </td> </tr>
      </table>

      <p>Atention le code n'ai pas un langa extratereste et sa logique et bien souvent identique a selle de la la vie de tout les jour</p>

      <p>exenple: dans la vie de tout les jours Ci je me leve a vant dix heur demain j'irai faire les course </p>
      <p> se traduit en progamation par : if($heurDuLever < 10 ){ echo 'aler faire les courses'; } </p>

    </article>

    <article class="phpMiniAp">
      <h2> dans cette partie je vais maitre en aplication tous se que j' pus voir presedament</h2>
      <h3>les base du php</h3>
      <ul>
        <li>- Les comentaire</li>
        <li>- Les variables</li>
        <li>- La concatenation </li>
        <li>- Les operation</li>
        <li>- Les fontion natitve include, echo et printf </li>
        <li>- Les symbole conditionele</li>
        <li>- Les condition</li>
      </ul>

      <p>Pour realiser cette exersice je vais inclure le fichier <strong> les-conditions-PHP.php </strong> cidesous :</p>
      <p>pour fasiliter la conpreention je vai ajouter des capeture decrant au format jpg contenue dans docier img</p>

      <hr>
      <p class="centrai"> cidesou du code php</p>
      <hr>

      <?php include('script-php/les-conditions-PHP.php'); ?>

    </article>

  </main>

</div>
