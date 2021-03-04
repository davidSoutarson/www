<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Recher de film</title>

  </head>
  <body>
    <?php
        $film_disponible = array(
             array('titre' =>'Les Évadés', 'annee'=>'1994' , 'description'=>'Deux hommes emprisonnés se lier sur un certain nombre d’années, trouver réconfort et rédemption éventuelle par des actes de décence commune.'),
             array('titre' => 'Le parrain','annee'=> '1972','description'=>'Le patriarche vieillissant d’une dynastie du crime organisé transfère le contrôle de son empire clandestin à son fils réticent.'),
             array('titre' =>'Le parrain,2ème partie' , 'annee'=>'1974','description'=>'La vie et la carrière précoces de Vito Corleone dans les années 1920 à New York sont dépeintes, tandis que son fils, Michael, élargit et resserre son emprise sur le syndicat du crime familial.' ),
             array('titre' =>'The Dark Knight : Le Chevalier noir' ,'annee'=>'2008' ,'description'=>'Lorsque la menace connue sous le nom de Joker fait des ravages et le chaos sur les gens de Gotham, Batman doit accepter l’un des plus grands tests psychologiques et physiques de sa capacité à lutter contre l’injustice.'),
             array('titre' =>'12 hommes en colère' ,'annee'=>'1957','description'=>'Un jury tente d’empêcher une erreur judiciaire en forçant ses collègues à réexaminer la preuve.' ),
             array('titre' =>'La liste de Schindler' ,'annee'=>'1993' ,'description'=>'Dans la Pologne occupée par les Allemands pendant la Seconde Guerre mondiale, l’industriel Oskar Schindler s’inquiète peu à peu pour sa main-d’œuvre juive après avoir été témoin de leur persécution par les nazis.'),
             array('titre' =>'Le Seigneur des anneaux : Le Retour du roi' ,'annee'=>'2003' ,'description'=>'Gandalf et Aragorn mènent le Monde des Hommes contre l’armée de Sauron pour attirer son regard de Frodon et Sam alors qu’ils s’approchent du Mont Doom avec l’Anneau Unique' ),
             array('titre' =>'Pulp Fiction' ,'annee'=>'1994' ,'description'=>'La vie de deux hommes de la mafia, un boxeur, un gangster et sa femme, et une paire de bandits diner s’entremêlent dans quatre contes de violence et de rédemption.' ),
             array('titre' => 'Le Bon, la brute, le truand' ,'annee'=>'1966' ,'description'=>'Une escroquerie de chasse aux primes rejoint deux hommes dans une alliance difficile contre un troisième dans une course pour trouver une fortune en or enterré dans un cimetière éloigné.' ),
             array('titre' => 'Le Seigneur des anneaux : La Communauté de l\'anneau','annee'=>'2001' ,'description'=>'Un doux Hobbit de la Comté et huit compagnons se sont mis en route pour détruire le puissant One Ring et sauver la Terre du Milieu du Seigneur Des Ténèbres Sauron.' ),
             array('titre' => 'Fight Club' ,'annee'=>'1999' ,'description'=> 'Un employé de bureau insomniaque et un savonnier diable-peut-soin forment un club de combat souterrain qui évolue en quelque chose de beaucoup, beaucoup plus.'),
             array('titre' =>'Forrest Gump' ,'annee'=> '1994','description'=>'Les présidences de Kennedy et Johnson, les événements du Vietnam, du Watergate et d’autres événements historiques se déroulent à travers la perspective d’un homme de l’Alabama avec un QI de 75, dont le seul désir est d’être réuni avec sa bien-aimée d’enfance.' ),
             array('titre' =>'Inception ' ,'annee'=>'2010' ,'description'=>'Un voleur qui vole des secrets d’entreprise grâce à l’utilisation de la technologie de partage de rêves est donné la tâche inverse de planter une idée dans l’esprit d’un directeur général.'),

         );
$anneeFilm = [];

foreach ($film_disponible as $film_disponible)
{
  $anneeFilm [] = $film_disponible ['annee'];
};

  echo '<ul>';
foreach ($anneeFilm as $anneeFilmListe) {
  echo '<li>'.$anneeFilmListe. '</li>';
};
  echo '</ul>';

  echo '<p><strong>' . $anneeFilm [4] . '</strong></p>';



    ?>





  </body>
</html>
