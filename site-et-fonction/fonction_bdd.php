<?php
//appelle des fonction
$aire = aire(10,20);
echo $aire;
//$perimetre = perimetre()

 function aire($largeur,$longueur)
{
  $total = $largeur*$longueur;
  return $total;
}

$perimetre = perimetre(10,20);

function perimetre($largeur,$longueur)
{
 $total = $largeur+$longueur;
  $resulta = $total * 2;
  return $resulta;
}



//appelle des fonction
$bouton_envoyer = boutonSubmit();

function boutonSubmit()
{
  $form_envoyer= '<input type="submit" name="envoyer" value="envoyer">';
  return $form_envoyer;
}

$formParallélogramme = formParallélogramme();

function formParallélogramme()
{
  $champ_largLong = '<p> <input id= "l" type="text" name="l" value="" placeholder="La largeur">
                        <input id= "L" type="text" name="L" value="" placeholder="La Longueur"> </p>';
  return $champ_largLong ;
}

#___________________tes tete_________________
#creation fonction afichage css
#___________________tes tete_________________


 ?>
