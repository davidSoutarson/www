<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>mon aprentisage</title>
  </head>
  <body>


 <h1>aprentisage</h1>



 <?php
 echo '<p>_______   while   _______ </p>';
# la boucle while
$x=1;
while ($x <= 10) {
# afiche puis incremente
  echo 'ceci est le nombre :' .$x.' <br>';
    $x++;
}


 echo '<p>_______   do while   _______ </p>';
# la booucle do{} while()
$x=1;

do{
  echo 'ceci est le nombre :'.$x.'.</br>';
  $x++;
}
while ($x <= 10);
echo '<p>_______   boucle for  _______ </p>';

for($x=1; $x <=10 ; $x++){
  echo 'ceci est le nombre :'.$x.'.</br>';
}

echo '<p>_______  foreach  __ a besois d\'un tableau ou d\'un objet_____ </p>';

# creon un tableau

$prenonm = array('Piere', 'Paul','Jacques' );

$prenon[0] ='Piere';
$prenon[1] ='Paul';
$prenon[2] ='Jacques';

 echo '<p>___pour tablau numeroter ____ aficher avec for  _______ </p>';

 for ($i=0; $i <=2 ; $i++) {
   echo $prenon[$i].'//';
 }

 echo '<p>_______ aficher avec foreach as $value _______ </p>';
foreach ($prenon as $value) {
  echo $value.'<br>';
}

 echo '<p>_______ aficher avec foreach as $key => $value _______ </p>';

$age = array('Piere' => 24 , 'Paul'=>22 , 'Jacques' =>'nom rensenier');

$age['Piere']= 24;
$age['Paul']= 22;
$age['Jacques']= 'nom resenier';
 echo '<p>_______ clef et valeur _______ </p>';
foreach ($age as $key => $value) {
  echo $key. ' : ' .$value. '<br>';
}

 echo '<p>_______ valeur _______ </p>';

 foreach ($age as $valeur) {
   echo $value.'<br>';
 }

 echo " _______ les tableau mutidimentionele _____________";

 $membres = array(
    array('Piere','24','Pieregireau@gmail.com',),
    array('Paule','22','Paulepolo@live.fr',),
    array('Jacque','36','Jaco-COCO@gmail.com',),
 );

echo '<p>_______ afichachege en dur  _______ </p>';
echo $membres [0][0].' a '.$membres [0][1].' ans, son mail est : ' .$membres [0][2].'.<br/>';
echo $membres [1][0].' a '.$membres [1][1].' ans, son mail est : ' .$membres [1][2].'.<br/>';
echo $membres [2][0].' a '.$membres [2][1].' ans, son mail est : ' .$membres [2][2].'.<br/>';
echo '<p>_______ afichachege avec boucle for  _______ </p>';

for($ligne = 0; $ligne < 3 ; $ligne++){
  $membre_no = $ligne+1;
  echo 'membre numérot : ' .$membre_no. '<br>';
  echo '<ul>';
  for ($col=0; $col< 3; $col++){
    echo '<li>'.$membres[$ligne][$col].'</li>';
  }
  echo '</ul>';
}
echo '<p>_______ ______ ___ _____ ___ _______ </p>';
foreach ($membres as $value) {
  echo 'membbre : ';
  foreach ($value as $info) {
    echo $info. '<br>';
  }
}

echo '<p>_______ ______ ___ _____ ___ _______ </p>';

function Bonjour(){
  echo "bonjour a tous";
}
Bonjour();
echo '<p>_______ comprendre verification _______ </p>';
$utilisateur = [
    'id' => 0,[ 'prenom'=> 'David', 'sexe' => 'h',],
    'id' => 1,[ 'prenom'=> 'Paule' , 'sexe' => 'h', ],
    'id' => 2,[ 'prenom'=> 'Anne' , 'sexe' => 'f', ],
    'id' => 3,[ 'prenom'=> 'Jean' , 'sexe' => 'h', ],
    'id' => 4,[ 'prenom'=> 'Myriame' , 'sexe' => 'f', ],
    'id' => 5,[ 'prenom'=> 'Damien' , 'sexe' => 'h', ],
    'id' => 6,[ 'prenom'=> 'Cloer' , 'sexe' => 'f', ],
    'id' => 7,[ 'prenom'=> 'Silvie' , 'sexe' => 'f', ],
];

$homme = [];
$femme = [];



?>

  </body>
</html>
