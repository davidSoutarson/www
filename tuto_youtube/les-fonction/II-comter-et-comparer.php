<p> <em>dans ses exemple nous utiliseron print_r ou var_dump pour l'afichahe <br>
je tien a rapeler que tout les fontion peuve etre asigner a une variable </em></p>

<h2>la fontion count()</h2>
<p>cette fontion vas retourner le nombre d'element d'un tableaux</p>

<p>  $sport =array("natation","velo","coures");</p>
<p>echo count($sport);</p>
<?php
  $sport =array("natation","velo","coures");

  echo count($sport);
 ?>
<h2>La fonction array_count_values()</h2>
<p>cette fontion vas retourner le valeur trouver d'un tableaux</p>

<p>  $compter =array("A","velo","natation","velo","A");</p>
<p>ex: print_r(array_count_values($compter));</p>

<?php
  $compter =array("A","velo","natation","velo","A");

  print_r(array_count_values($compter));
  ?>

<h2>la fonction array_diff_assoc() , array_diff_key() ou array_diff </h2>

<p>Ces fonction vas comparer les clef et valeur deux deux et vas renvoie les diference</p>
<p>Ces fonction prend deux tableaux en argument</p>
<p>Ces fontion et sensible a la case sur les clef et les valeur</p>


<p>  $compare = array('a' =>'bleu', 'b' => 'vert', 'c' => 'jaune');</p>
<p>  $comparant = array('a' =>'bleu', 'b' => 'vert');</p>
<p>ex:  print_r(array_diff_assoc($compare,$comparant));</p>
<h3>Atention</h3>
<p> print_r(array_diff_key($compare,$comparant)); ne compare que les cef</p>
<p> print_r(array_diff($compare,$comparant)); ne compare que les valeur</p>

<?php
  $compare = array('a' =>'bleu', 'b' => 'vert', 'c' => 'jaune');
  $comparant = array('a' =>'bleu', 'b' => 'vert');

    print_r(array_diff_assoc($compare,$comparant));
    echo"<br>";
    print_r(array_diff_key($compare,$comparant));
    echo"<br>";
    print_r(array_diff($compare,$comparant));
 ?>

 <h2>La fonction array_intersect_ossoc,array_intersect_key ou array_intersec </h2>
 <p>cette fontion et linvser de la presedante elle pemer de faire resortir les similitude entre deux tableaux</p>
 <p>Cette fonction prend deux tableaux en argument</p>
 <p>exemple d'ecritiure et utilisation de la fontion</p>

 <p> $compare = array('a' =>'bleu', 'b' => 'vert', 'c' => 'jaune');</p>
 <p> $comparant = array('a' =>'bleu', 'b' => 'vert');</p>
 <p> print_r(array_intersect_assoc($compare,$comparant));</p>


 <h3>Atention</h3>

 <p> print_r(array_intersect_key($compare,$comparant)); ne compare que les cef</p>
 <p> print_r(array_intersect($compare,$comparant)); ne compare que les valeur</p>

 <?php
   $compare = array('a' =>'bleu', 'b' => 'vert', 'c' => 'jaune');
   $comparant = array('a' =>'bleu', 'b' => 'vert');

     print_r(array_intersect_assoc($compare,$comparant));
     echo"<br>";
     print_r(array_intersect_key($compare,$comparant));
     echo"<br>";
     print_r(array_intersect($compare,$comparant));
  ?>

  <h2>La fontion array_fill()</h2>

</p>cette fontion  nous permes de renplire un tableaux avec une valeur que lon vas repeter un sertin nombre de fois<p>
<p>cette fontion prend trois argument (1premier index dutablaux2 nobredre de fois insertion valuer 3 la valeur)</p>


<p>ex: print_r(array_fil(0,5,"vert"));</p>
<p>ou</p>
<p>  $ramplisage=(array_fill(0,5,"vert"));</p>
<p>afichage avec var_dump  echo var_dump($ramplisage)</p>
<?php
  print_r(array_fill(0,5,"vert"));

  echo "<br> On utilise la fontion dans une variable";

  $ramplisage=(array_fill(0,5,"vert"));

  echo var_dump($ramplisage);
 ?>

 <h3>la fontion array_fill_keys()</h3>
 <?php
 $clefs = array("a","b","c","d");
 $remplir = array_fill_keys($clefs,"bleu");

 print_r($remplir);
 ?>

 <h2>Les fonctions array_push() et array_pop()</h2>

<p>array_push() servira a inserer des element ent fin de tableaux</p>
<p>array_pop() servira a suprimer le dernier element d'un tableaux</p>

<?php
  $couleur = array('bleu','vert' );

  array_push($couleur,'rouge','or','gris');
  print_r($couleur);
  echo "<br>";
  array_pop($couleur);
  print_r($couleur);

  echo "<h3> La fontion array_unshit()</h3>";
  echo "<p>pour ajouter des element en debut de tableaux</p>";

  array_unshift($couleur,'sera suprimer','rose','on a ajouter');
  print_r($couleur);
  echo "<br>";
  echo '<p>nous pouvons aficher lelement suprimer comme ceci: echo array_shift($couleur);</p>
  <p> Atention! a ne pas peter loperation car nous suprimeron un autre elemets a chaque apele de la fontion</p>';

  echo array_shift($couleur)." ici  nous afichon la supretion <br>" ;
  print_r($couleur);

 ?>
 <h2> la fonction array_splice()</h2>
 <p>Cette fontion permés de suprimer sertin element d'un tableaux, a partir dune sertene position et de les renplase par de nouveaux element.</p>
 <p>Elle vas egalemt retourner un tableaux un tableaux contenent les element suprimer.</p>
 <p>Elle a besoin de deux argument le nom du tableaux et un nombre lui indicant ou comense la supresion 'index'</p>
 <p>nous pouvons lui ajouter deux élement facultatif le nombre et les elment de renplasemt contenu dans un tableaux $Remplasement</p>
 <p>Pour fontioner <strong>array_splice($nom du tableaux, 4 ,<em> 3 nombre de supretion,  $Remplasement </em> </strong>)</p>
<p> rapele le premier element d'un tableaux o pour index 0 </p>

<?php
  $couleur1 = array('a' =>'bleu' ,'b' =>'vert' ,'c' =>'jaune' );
  $couleur2 = array('a' =>'rouge' ,'b' =>'violet');

  echo 'afichage de la suption efectuier avec array_splice() comme ceci : print_r(array_splice($couleur1,1));<br> ';
  print_r(array_splice($couleur1,1));
  echo '<br> resuta : print_r($couleur1);<br> ';
  print_r($couleur1);

echo '<p> modification et renplasement ex:<br> <br> $couleur1b = array("a" =>"bleu" ,"b" =>"vert" ,"c" =>"jaune" );<br>
  $couleur2b = array("a" =>"rouge" ,"b" =>"violet");<br>
  array_splice($couleur1b,1,2,$couleur2b);<br>
  print_r($couleur1b);</p>';

  $couleur1b = array('a' =>'bleu' ,'b' =>'vert' ,'c' =>'jaune' );
  $couleur2b = array('a' =>'rouge' ,'b' =>'violet');

  array_splice($couleur1b,1,2,$couleur2b);
  print_r($couleur1b);
 ?>
