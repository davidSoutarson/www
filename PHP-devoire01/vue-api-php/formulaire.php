

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formulaire covoituturage</title>
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body>
    <div id="wrapere">

      <?php include("header.php");  ?>

      <main>
        <?php
        $proposionDeTrager = [
          id => 0,['proposDepart'=>'Paris','arriver' => 'Nantes','proposHeureDepart'=>'11:00','proposHeureArriver'=> '12:34' , 'conducteure' => 'Thomas'],
          id => 1,['proposDepart'=>'Oreléans','arriver' => 'Nantes','proposHeureDepart'=>'05:15','proposHeureArriver'=> '09:32' , 'conducteure' => 'Mathieu'],
          id => 2,['proposDepart'=>'Dublin','arriver' => 'Tours','proposHeureDepart'=>'07:23','proposHeureArriver'=> '08:50' , 'conducteure' => 'Nathanaël'],
          id => 3,['proposDepart'=>'Paris','arriver' => 'Oreléans','proposHeureDepart'=>'03:00','proposHeureArriver'=> '05:26' , 'conducteure' => 'Clément'],
          id => 4,['proposDepart'=>'Nice','arriver' => 'Nice','proposHeureDepart'=>'10:00','proposHeureArriver'=> '12:09' , 'conducteure' => 'Audrey'],
          id => 5,['proposDepart'=>'Nice','arriver' => 'Nantes','proposHeureDepart'=>'10:40','proposHeureArriver'=> '13:00' , 'conducteure' => 'Pollux'],
          id => 6,['proposDepart'=>'Tours','arriver' => 'Tours','proposHeureDepart'=>'11:00','proposHeureArriver'=> '16:10' , 'conducteure' => 'Edourd'],
          id => 7,['proposDepart'=>'Nice','arriver' => 'Anboise','proposHeureDepart'=>'16:00','proposHeureArriver'=> '12:34' , 'conducteure' => 'Priscilla'],
          id => 8,['proposDepart'=>'Nice','arriver' => 'Anboise','proposHeureDepart'=>'12:00','proposHeureArriver'=> '12:34' , 'conducteure' => 'Charlotte'],

        ];
echo "<br>___________________p1____________________________<br>";
/*cette parti me permet daficher tou le tableau $proposionDeTrager[] */

        foreach ($proposionDeTrager as $key => $value)
        {

           foreach ($value as $key => $value)
           {
             echo '' .$value. ', ';
          }
          echo "<br>";
        };

echo "<br>__________________p2_____________________________<br>";
/*avec cette partie de scripte je pour aficher une phrase de proposition en dur
apre la validation de mon fpomulaire*/
        $villeDeparProposer = $proposionDeTrager[0][proposDepart];
        $VilledeparProposer = $proposionDeTrager[0][arriver];
        $heudeDeparProposer = $proposionDeTrager[0][proposHeureDepart];

        echo'<br>' .$villeDeparProposer;
        echo $VilledeparProposer;
        echo $heudeDeparProposer;
echo "<br>__________________p3_____________________________<br>";

/*avec cette partie de scripte je pour aficher une frase de proposition de manier dinamique
apre la validation de mon fpomulaire*/
        $id = $proposionDeTrager[id] ;#je recuper les id du tableau comme valeur max d'incrémentation
        echo $id;
        $n = -1;#je declare mon conteur d'incrémentation a 0
        while ($n <= $id) {
          $n++;
          $villeDeparProposer = $proposionDeTrager[$n][proposDepart];
          $VilledeparProposer = $proposionDeTrager[$n][arriver];
          $heudeDeparProposer = $proposionDeTrager[$n][proposHeureDepart];

          echo'<br>' .$villeDeparProposer;
          echo $VilledeparProposer;
          echo $heudeDeparProposer;
        };

echo "<br>__________________p4_____________________________<br>";
/* je vais pouvois efectuer des verification  avec cette partie */
        $id = $proposionDeTrager[id] ;#je recuper les id du tableau comme valeur max d'incrémentation

        $n = -1;#je declare mon conteur d'incrémentation a 0
        while ($n <= $id) {
          $n++;
          $villeDeparProposer = $proposionDeTrager[$n][proposDepart];

          echo'<br>' .$villeDeparProposer;
        };

echo "<br>__________________p5_____________________________<br>";
          /* je vais pouvois efectuer le selecte avec cette partie */
          $conteur = -1 ;
          foreach ($proposionDeTrager as $kye=> $value) {

            $conteur ++ ;

            $ville = $proposionDeTrager[$conteur][proposDepart];

            echo $option [$conteur] = " $ville ";
            #echo "$conteur";

          }


echo "<br>__________________test du fornulaire_____________________________<br>";

var_dump($_POST);

var_dump($option);
$nom = $_POST ['nom'];
$prenom = $_POST ['prenom'];
$email = $_POST ['email'];
$tel = $_POST ['tel'];
$heure = $_POST ['heure'];
$choixDeVille = $_POST ['choixDeVille'];
$validation = $_POST['validation'];

if (isset ($validation))
{

    if (empty($nom))
    {
      $ereure_nom = "Ecriver votre nom ici";

    }

    if (empty($prenom))
    {
      $ereure_prenom = "Ecriver votre pernom ici";
    }

    if (empty($email))
    {
      $ereure_email = "Ecriver votre emaile ici";
    }

    if (empty($tel))
    {
      $ereure_tel = "Ecriver votre n°téléphone ici";
    }

    if (empty($heure))
    {
      $ereure_heure = " ecriver l'heure ici " ;
    }

    if (isset($choixDeVille))
    {
      $ereure_ville ="choiser vune ville" ;
    }
    if(
        (!isset($_POST['validation']) )
        OR
        ( empty($_POST['nom']) ) //si la varible nom et vide
        or
        ( empty($_POST['prenom']) ) //si la varible prenon et vide
        or
        ( empty($_POST['email']) ) //si la varible emaile et vide
        or
        ( empty($_POST['tel']) ) //si la varible tel et vide
        or
        ( empty($_POST['heure']) ) //si la varible heuret vide
        or
        (!isset($_POST['choixDeVille']) )//si choix de ville exite pas

      )
      $erreur01 = "veyller ramplire le formulaire avent validation";
}

?>
         <h1>formulaire de covoiturage</h1>

           <form class="formCovoite" action="formulaire" method="post">

                <p> <label for="nom"> ecriver votre nom :</label>
                <input id="nom" type="text" name="nom" value="" placeholder="<?php echo ''.$ereure_nom.' '; echo ''.$nomTrosLong.' ';  ?>"></p>


                <p> <label for="prenom"> ecriver votre prenom :</label>
                <input id="prenom" type="text" name="prenom" value="" placeholder="<?php echo ''.$ereure_prenom.' ';  ?>"></p>


                <p> <label for="email"> ecriver votre email :</label>
                <input id="email" type="text" name="email" value="" placeholder="<?php echo ''.$ereure_email.' ';  ?>"></p>


                <p> <label for="tel"> ecriver votre telephone :</label>
                <input id="tel" type="number" name="tel" value="" placeholder="<?php echo ''.$ereure_tel.' ';  ?>"></p>


                <p> <label for="heure"> ecriver votre heure de depart :</label>
                <input id="heure" type="time" name="heure" value="" > <?php echo ''.$ereure_heure.' ';  ?></p>


                <p> <label for="choixDeVille"> Choisir vautre vile de Depart</label>
                  <select id="choixDeVille"  name= "choixDeVille">
                    <option> <?php echo'' .$selectioner.''; ?>  </option>
                    <?php
                     $selectioner = [''];
                  foreach ($option as $f=> $option ) {
                     echo "<option = value = '$f'> $option </option>";
                  }

                    ?>
              </select>  <?php echo ''.$ereure_ville.'';  ?>  </p>


              <p>  <label for="validation">cliquer ici pour valider :</label>
              <button id="validation" type="submit" name="validation" value="valider" >Valider</button> </p>

              <?php echo ''.$erreur01.''; ?>

    </main>

    <?php include("footer.php"); ?>
    </div>

  </body>
</html>
