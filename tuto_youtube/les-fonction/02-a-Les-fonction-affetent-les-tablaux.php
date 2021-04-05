<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>les fontion affetent les tableaux</title>
  </head>
  <body>
    <h1>les fontion php affetent les array </h1>
    <ul>
      <li>parcourire ou rechercher</li>
        <ol>
          <li>array_keys()</li>
          <li>array_values()</li>
          <li>array_key_exists()</li>
          <li>array_search()</li>
          <li>in_array()</li>
        </ol>
      <li>compter et compare</li>
          <ol>
            <li>count()</li>
            <li>array_count_values()</li>
            <li>array_diff_assoc() , array_diff_key() ou array_diff</li>
            <li>array_intersect_ossoc,array_intersect_key ou array_intersec</li>
            <li>array_fill()</li>
            <li>array_push() et array_pop()</li>
            <li>array_unshit()</li>
            <li>array_splice()</li>
          </ol>
      <li>Combiner et trier</li>
        <ol>
          <li>array_marge()</li>
          <li>array_combine()</li>
          <li>array_unique</li>
          <li>sort() sont oposer rsort()</li>
          <li>ksort() krsort() asort() arsort()</li>
        </ol>
    </ul>

    <h2>La function: array_keys() </h2>

    <p>Cette function sutilise sur un tableaux asausiatif vas retouner les clef
      dans un nouvau tableaux</P>

      <?php
         $voitures = array(
           'Citroen' =>'DS3' ,
           'Reneau' =>'Clio' ,
           'Peugeot' =>'306' ,
           'Peugeot2' => 306,
         );
          echo "<table border=1>";
          echo "<th> clef </th> <th> valeur </th>";
         foreach ($voitures as $key => $value) {
           echo  '<tr> <td>  '.$key.'</td> <td>  '.$value.'</td> </tr>';
         }
           echo "</table>";
           echo "<p>La fontion <strong>array_keys</strong> utiliser dans la fontion dafichag print_r() : </p>
           <p>Nous pouvon utiliser avec ses fonction deux argument facultatife de 1er type valeur, 2em true || false </p>";

         print_r(array_keys($voitures));
         echo "<br><br>____________Afiche la clef asosier au chifre 306_____________<br><br>";
         print_r(array_keys($voitures,306,true));

         echo "<br><br>________le desieme agument false ne ditinge pas les chaine des chifre____________<br><br>";
         print_r(array_keys($voitures,306,false));

       ?>

         <h2>La function: array_values() </h2>

         <p>Cette function sutilise sur un tableaux asausiatif vas retouner tout les valeur
           dans un nouveau tableaux</P>
           <?php
           $loisirs = array(
             'sport'=>'Trail',
             'voyage'=> "Ecose",
             'musique'=> 'Guitard'
           );

           echo "<table border=1>";
           echo "<th> clef </th> <th> valeur </th>";
           foreach ($loisirs as $key => $value) {
               echo  '<tr> <td>  '.$key.'</td> <td>  '.$value.'</td> </tr>';
           }
           echo "</table>";
           echo "<p>La fontion <strong>array_values</strong> utiliser dans la fontion dafichag print_r() : </p>" ;

              echo "<pre>";
              print_r(array_values($loisirs));
              echo "</pre>";
           ?>

           <h2>La function: array_key_exists() </h2>

           <p>cette fontion vas retouner les valeur true || false selon que la clef que lon rechercher existe ou non</p>
           <p>Pour cette fonction a besoi de 2 argument la clef et le tableaux dans le quelle faire la rechaire </p>

           <?php

            $voitures = array(
             'Citroen' =>'DS3' ,
             'Reneau' =>'Clio' ,
             'Peugeot' =>'306' ,

            );
            echo "<table border=1>";
            echo "<th> clef </th> <th> valeur </th>";
           foreach ($voitures as $key => $value) {
             echo  '<tr> <td>  '.$key.'</td> <td>  '.$value.'</td> </tr>';
           }
             echo "</table>";
             #  __________afichage de l'exemple_____________
               echo "____________afichage de l'exemple____________<br>";

             echo '<p> if (array_key_exists("Citroen",$voitures)) { </p>
                  <p>echo "La clef exite"; </p>
                  <p>}</p>
                  <p>else {</p>
                  <p>echo" Clef exite pas ";</p>
                  <p>}</p>';
                echo "___________fin afichage de l'exemple____________<br>";

             if (array_key_exists("Citroen",$voitures)) {
               echo "<p>La clef exite</p>";
             }
             else {
               echo"<p> Clef exite pas </p>";
             }

            ?>

            <h2>suite</h2>

            <?php include '02-b-Les-fonction-Suite.php' ?>

            <h2>II compté et comparer</h2>

            <?php include 'II-comter-et-comparer.php' ?>

            <h2>Combiner trier</h2>

            <?php include 'III-Combiner-trier.php' ?>
  </body>
</html>
