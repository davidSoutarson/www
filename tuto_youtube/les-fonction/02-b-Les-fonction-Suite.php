<h2>la function array_search()</h2>

<p>cette fontion vas recher une valeur dans un tableaux et nous retouner la clef qui lui et asosier  </p>
<p>tout comme array_values cette fontion utilise les bouleun true || false pour verfier les type de valeur</p>
<?php
//declaration de tableaux ex
  $voitures = array(
    'Citroen' =>'DS3' ,
    'Reneau' =>'Clio' ,
    'Peugeot' =>'306' ,
    'Peugeot numerique' => 308 ,
    );
//afichage tableaux ex
    echo "<table border=1>";
    echo "<th> clef </th> <th> valeur </th>";
    foreach ($voitures as $key => $value) {
    echo  '<tr> <td>  '.$key.'</td> <td>  '.$value.'</td> </tr>';
    }
    echo "</table>";
//utilistion de la fonction array_search()
    echo array_search("DS3",$voitures)."<br>";
    echo '<p>utilisation des argument <strong> array_search(308,$voitures,true);</strong> dans se cas la fontion afiche la clef posedan une valeur numerique 308</p>';
    echo array_search(308,$voitures,true);

 ?>

 <h2>La fonction in_array()</h2>
 <p>vas rechercher une valeur dans un tableaux et revoyer true si la valeur et trouver et false si la valeur n'ai pas trouver.</p>

 <?php
  $prenoms = array("Pierre","Paul","Jacques",304);

  if (in_array("Pierre",$prenoms)) {
  echo "<p>prenom trouver</p>";
  }
  else {
    echo "<p>prenom non trouver</p>";
  };
echo '<p>sensible a caset: dans ce cas if (in_array("PIERRE",$prenoms,true))</p>';

  if (in_array("PIERRE",$prenoms)) {
  echo "<p>prenom trouver</p>";
  }
  else {
    echo "<p>prenom non trouver</p>";
  };

  echo '<p> dans ce cas if (in_array("304",$prenoms,true))</p>';

  if (in_array("304",$prenoms,true)) {
  echo "<p>prenom trouver</p>";
  }
  else {
    echo "<p>prenom non trouver</p>";
  };

echo '<p> dans ce cas if (in_array(304,$prenoms,true))</p>';
  if (in_array(304,$prenoms,true)) {
  echo "<p>prenom trouver</p>";
  }
  else {
    echo "<p>prenom non trouver</p>";
  };

  ?>
