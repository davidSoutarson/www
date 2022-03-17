<?php
#coure php
echo '<p>
1er la condition if  et la plus simple elle et utiliser pour executer
du code selement si la condition est vrai.
</p>
<p>
Dans cette exple satique nous alons aficher un mesague en fontion de la
variable heure_de_connextion avant 18 h bone jouner.
<p>
<p>
dans ce cas jutilise des variable fixe mais par la suis je serair en mesure de les faire vairier grase a des fontion:
</p>';

#declaration de variables
$heure_de_coxnnextion = 17;
$note = 12;

if($heure_de_coxnnextion < 18){
  echo "paser une bonne journée !Ce mesage sera afiche car mavariable et inférieur 18 <br>";
}else {
  echo "paser une bone soirer <br> ";
}

echo "<p> en partent du maime exenple afetons une valeur difrente a une varible ci notre conditionet veriffier ou pas </p> ";

$heure_de_coxnnextion = 17;

if($heure_de_coxnnextion < 18){
  echo "paser une bonne journée <br> ";
  $journer = "oui";
}else {
  echo "paser une bone soirer <br>";
  $journer = "nom";
}

echo 'fait-il jours ? reponce est :' .$journer. '.';


echo '<p>
        2em la condition if... elseif... else : cette scture et plus complete
        car elle permet de gére otent de cas que l\'on shouete
      </p>
      <p> aficher un mesage en fonction de la note = 12 <br>
          -vous aver eu la moyene;<br>
          -vous naver pas eu la moyene;<br>
          -vous aver eu plus que la moyene\.
       </p>
       <hr>
       <p class= "centrai"> code php pour if... elseif... else... est note =' .$note. '</p>
       <hr>';

if ($note < 10) {
  echo "-vous n'aver eu la moyen <br>";
}
elseif ($note == 10) {
  echo " -vous aver eu just moyen <br>";
}
else {
echo "-vous aver eu plus de la moyene <br>";
}

?>
