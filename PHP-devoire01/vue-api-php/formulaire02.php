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
<!--je vais donc essayer de verbaliser se que je panse devoir faire

1 dans un premier temps je dois vérifier si l'utilisateur a bien remplie le formulaire ?
je peux le faire avec une conditionnelle if(!empty($variable simplifier nom prenom ...)) pour les champs de texte
pour les champs de type  radio checkbox je peux le faire avec une conditionnelle   if (isset ($villeDepart)) qui vérifie la présence d'une variable

2 une fois cela fait je dois fait correspondre avec une nouvelle vérification conditionnelle un départ   choisi avec un départ proposé  .
je pense pouvoir le faire  avec une conditionnelle  if ( ($villeDepart)==($Traterproposer[ 0] [ villeDeparProposer]) )

3 je pense que je peut effectuer la condition 2 dans le résultat de la condition 1 " si le choix de l'utilisateur est fait dans notre cas tout le formulaire est correctement remplie  "  je fais  la vérification  n2 si   une ville qui correspond dans les propositions de villes .
mais  je  rencontre un  problème  faire passer Traterproposer[ 0] Traterproposer[ 1] Traterproposer[ 2] Traterproposer[ nombre de prosition 8 ]   dans notre cas
c'est là que je bloque
j'ai pensé à un  if($Tragerproposer[ 0] [ villeDeparProposer]) or ($Tragerproposer[ 1] [ villeDeparProposer]) or($Traterproposer[ 2] [ villeDeparProposer]) )or ... 8 == ($villeDepart)
mais ça ne serai pas dynamique.

Je voudrais ajouter une boucle  while : while ($conteur <= $NombreDeTagerProposer) { $conteur++ }
et ma vérification devrais être  if ($Tragerproposer[ $conteur][ depart ]) == ($villeDepart){
$resulta = cette partie me pose problème ? je pense à la création d'un nouveau tableau que je devrais afficher avec une boucle foreach :
echo 'voici les départs de covoiturage  proposés pour votre ville départ de : ' . $villeDepart . ' : <br>' ;
foreach ($resulta as $key => value){echo ' covoiturage partent de '  . $value. ' pour votre recherche') }
pour afficher les valeurs contenues dans ce tableau. qui devait être toutes les propositions de départ vérifiés c'est-à-dire dont les valeurs sont les mêmes que le choix utilisateur -->

        <?php
        # 001 les conisgne je vais devoir utiliser le tableau de propotition suvent pour les ccomparer avec un foumulaire utilisateur

        # le tableau contement les COVOITURAGE proposer
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
          id => 9,['proposDepart'=>'CoolTeste','arriver' => 'Anboise','proposHeureDepart'=>'12:00','proposHeureArriver'=> '12:34' , 'conducteure' => 'Charlotte'],
          id => 10,['proposDepart'=>'CoolTeste','arriver' => 'Anboise','proposHeureDepart'=>'12:00','proposHeureArriver'=> '12:34' , 'conducteure' => 'Charlotte'],
        ];
        #les resulta aficher et son ce de la premire ligne du tableau
          echo 'ville'.$proposionDeTrager[0][proposDepart]. ' le resulta aficher est son ce de la premire ligne du tableau <br>';

          echo 'heure'.$proposionDeTrager[0][proposHeureDepart]. ' le resulta aficher est son ce de la premire ligne du tableau <br>';

        # vais afichier tous les propositions dE Depart  du tableaux
        echo "<br> vais afichier tous les propositions de Depart  du tableaux <br>";
        foreach ($proposionDeTrager as $id => $tablaeuPorosition) {
          // code..
          $conteur = $n++;

          echo $conteur;
          echo 'proposition de depart ville : '.$proposionDeTrager[$conteur-1][proposDepart]. ' // <br>';

          $ville = $proposionDeTrager[$conteur-1][proposDepart];

          # $aficheVille = array( );
           $aficheVille [$conteur] = " $ville ";

        }
        # la fontion print_r me ser a verfier que je recupaire bien un tableaux
      #  print_r($aficheVille);

        #je peut aficher les vile de fasont dinamique avec cette boucle
        #car de recuper la valuer de conter qui et egale a talle de mon tableaux $proposionDeTrager = []
        $a = 1;
        while ($a <= $conteur) {
          echo $aficheVille[$a]." ";
          $a++;
        }




       ?>




      </div>
    </main>
    </div>

  </body>
</html>
