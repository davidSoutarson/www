<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Recher de film</title>
  </head>
  <body>
    <?php
        $film_disponible = array(
             array('titre' =>'Les Évadés', 'année'=>'1994' , 'description'=>'Deux hommes emprisonnés se lier sur un certain nombre d’années, trouver réconfort et rédemption éventuelle par des actes de décence commune.'),
             array('titre' => 'Le parrain','année'=> '1972','description'=>'Le patriarche vieillissant d’une dynastie du crime organisé transfère le contrôle de son empire clandestin à son fils réticent.'),
             array('titre' =>'Le parrain,2ème partie' , 'année'=>'1974','description'=>'La vie et la carrière précoces de Vito Corleone dans les années 1920 à New York sont dépeintes, tandis que son fils, Michael, élargit et resserre son emprise sur le syndicat du crime familial.' ),
             array('titre' =>'The Dark Knight : Le Chevalier noir' ,'année'=>'2008' ,'description'=>'Lorsque la menace connue sous le nom de Joker fait des ravages et le chaos sur les gens de Gotham, Batman doit accepter l’un des plus grands tests psychologiques et physiques de sa capacité à lutter contre l’injustice.'),
             array('titre' =>'12 hommes en colère' ,'année'=>'1957','description'=>'Un jury tente d’empêcher une erreur judiciaire en forçant ses collègues à réexaminer la preuve.' ),
             array('titre' =>'La liste de Schindler' ,'année'=>'1993' ,'description'=>'Dans la Pologne occupée par les Allemands pendant la Seconde Guerre mondiale, l’industriel Oskar Schindler s’inquiète peu à peu pour sa main-d’œuvre juive après avoir été témoin de leur persécution par les nazis.'),
             array('titre' =>'Le Seigneur des anneaux : Le Retour du roi' ,'année'=>'2003' ,'description'=>'Gandalf et Aragorn mènent le Monde des Hommes contre l’armée de Sauron pour attirer son regard de Frodon et Sam alors qu’ils s’approchent du Mont Doom avec l’Anneau Unique' ),
             array('titre' =>'Pulp Fiction' ,'année'=>'1994' ,'description'=>'La vie de deux hommes de la mafia, un boxeur, un gangster et sa femme, et une paire de bandits diner s’entremêlent dans quatre contes de violence et de rédemption.' ),
             array('titre' => 'Le Bon, la brute, le truand' ,'année'=>'1966' ,'description'=>'Une escroquerie de chasse aux primes rejoint deux hommes dans une alliance difficile contre un troisième dans une course pour trouver une fortune en or enterré dans un cimetière éloigné.' ),
             array('titre' => 'Le Seigneur des anneaux : La Communauté de l\'anneau','année'=>'2001' ,'description'=>'Un doux Hobbit de la Comté et huit compagnons se sont mis en route pour détruire le puissant One Ring et sauver la Terre du Milieu du Seigneur Des Ténèbres Sauron.' ),
             array('titre' => 'Fight Club' ,'année'=>'1999' ,'description'=> 'Un employé de bureau insomniaque et un savonnier diable-peut-soin forment un club de combat souterrain qui évolue en quelque chose de beaucoup, beaucoup plus.'),
             array('titre' =>'Forrest Gump' ,'année'=> '1994','description'=>'Les présidences de Kennedy et Johnson, les événements du Vietnam, du Watergate et d’autres événements historiques se déroulent à travers la perspective d’un homme de l’Alabama avec un QI de 75, dont le seul désir est d’être réuni avec sa bien-aimée d’enfance.' ),
             array('titre' =>'Inception ' ,'année'=>'2010' ,'description'=>'Un voleur qui vole des secrets d’entreprise grâce à l’utilisation de la technologie de partage de rêves est donné la tâche inverse de planter une idée dans l’esprit d’un directeur général.'),
         );
          /*echo "<pre>";
          echo print_r($film_disponible);
          echo "</pre>";*/
            $anneeDispo = [];
            $result_film =[];
          foreach ($film_disponible as $film_disponible)
          {
              $anneeDispo[] = $film_disponible['année'];
              if ( ( $film_disponible['année'] == $_GET['choiAnnée'] ) )
              $result_film[] = '<p>filme a regader pour l\'anner :'.$film_disponible['année'].'</p> <h3>'.$film_disponible['titre'].'</h3> <p> Description '.$film_disponible['description'].'</p>';
          }
        /*  echo "<pre>";
          echo print_r($result_film);
          echo "</pre>";*/
     ?>

     <div id="waper">
       <div class="conteneur">
         <form class="chois_film" action="index.php" method="get">

           <p><label for="année"> choisiser une année film disponible</label></p>
                <select id='année'name='choiAnnée' required >
                  <option  >année film </option>
            <?php
            foreach ($anneeDispo as $anneeDispo)
            {
            echo "<option value = '$anneeDispo' >" .$anneeDispo.  "</option> ";
            }
            ?>
            </select>

              <input type="submit" name="envoie" value="envoyer">
          </form>
          <?php
            echo "<pre>";
            echo print_r($_GET);
            echo "</pre>";

            if (isset($_GET['choiAnnée']) == $film_disponible['année']){

              foreach ($result_film as $result_film) {
                echo $result_film .'<br>';
              }

            }

            ?>


        </div>
     </div>


  </body>
</html>
