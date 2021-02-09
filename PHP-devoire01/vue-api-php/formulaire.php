

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


        $proposiondetrager = [
          ['proposdepart'=>'paris','arriver' => 'nantes','proposheuredepart'=>'11:00','proposheurearriver'=> '12:34' , 'conducteure' => 'thomas'],
          ['proposdepart'=>'oreléans','arriver' => 'nantes','proposheuredepart'=>'05:15','proposheurearriver'=> '09:32' , 'conducteure' => 'mathieu'],
          ['proposdepart'=>'dublin','arriver' => 'tours','proposheuredepart'=>'07:23','proposheurearriver'=> '08:50' , 'conducteure' => 'nathanaël'],
          ['proposdepart'=>'paris','arriver' => 'oreléans','proposheuredepart'=>'03:00','proposheurearriver'=> '05:26' , 'conducteure' => 'clément'],
          ['proposdepart'=>'nice','arriver' => 'nice','proposheuredepart'=>'10:00','proposheurearriver'=> '12:09' , 'conducteure' => 'audrey'],
          ['proposdepart'=>'nice','arriver' => 'nantes','proposheuredepart'=>'10:40','proposheurearriver'=> '13:00' , 'conducteure' => 'pollux'],
          ['proposdepart'=>'tours','arriver' => 'tours','proposheuredepart'=>'11:00','proposheurearriver'=> '16:10' , 'conducteure' => 'edourd'],
          ['proposdepart'=>'nice','arriver' => 'anboise','proposheuredepart'=>'16:00','proposheurearriver'=> '12:34' , 'conducteure' => 'priscilla'],
          ['proposdepart'=>'nice','arriver' => 'anboise','proposheuredepart'=>'12:00','proposheurearriver'=> '12:34' , 'conducteure' => 'charlotte'],

        ];



var_dump($_POST);






if (isset ($validation))
{
$validation = $_POST['validation'];
    if (!empty($nom))
    {
      $ereure_nom = "ecriver votre nom ici";
      $nom = $_POST ['nom'];
    }

    if (!empty($prenom))
    {
      $ereure_prenom = "ecriver votre pernom ici";
      $prenom = $_POST ['prenom'];
    }

    if (!empty($email))
    {
      $ereure_email = "ecriver votre emaile ici";
      $email = $_POST ['email'];
    }

    if (!empty($tel))
    {
      $ereure_tel = "ecriver votre n°téléphone ici";
      $tel = $_POST ['tel'];
    }

    if (!empty($heure))
    {
      $ereure_heure = " ecriver l'heure ici " ;
      $heure = $_POST ['heure'];
    }

    if (isset($choixdeville))
    {
      $ereure_ville ="choiser vune ville" ;
      $choixDeVille = $_POST ['choixDeVille'];
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
<div class="contenair">


           <form class="formcovoite" action="formulaire" method="post">


                <p> <label for="nom"> ecriver votre nom :</label>
                <input id="nom" type="text" name="nom" value="" placeholder="<?php echo ''.$ereure_nom.''; ?>"></p>


                <p> <label for="prenom"> ecriver votre prenom :</label>
                <input id="prenom" type="text" name="prenom" value="" placeholder="<?php echo ''.$ereure_prenom.' ';  ?>"></p>


                <p> <label for="email"> ecriver votre email :</label>
                <input id="email" type="text" name="email" value="" placeholder="<?php echo ''.$ereure_email.' ';  ?>"></p>


                <p> <label for="tel"> ecriver votre telephone :</label>
                <input id="tel" type="number" name="tel" value="" placeholder="<?php echo ''.$ereure_tel.' ';  ?>"></p>


                <p> <label for="heure"> ecriver votre heure de depart :</label>
                <input id="heure" type="time" name="heure" value="" > </p>


                <p> <label for="choixdeville"> choisir vautre vile de depart</label>
                  <select id="choixdeville"  name= "choixdeville">

                    <?php

                  foreach ($option as $option=> $option ) {

                       echo "<option = value = '$option'> $option </option>";

                    }

                    ?>
              </select>    </p>

              <p>  <label for="validation">cliquer ici pour valider :</label>
              <button id="validation" type="submit" name="validation" value="valider" >valider</button> </p>



            <?php


                echo ' <p> <label for="proposition"> choisir parmie les ville de depart </label>';
                echo  ' <select "proposition"  name= "proposition">';

                  foreach ($proposiondetrager as $key => $value)
                  {
                    foreach ($value as $key => $value)
                    {
                      echo "<option = value = '$value'> $value </option>";
                    }
                  }


            ?>
</div>
    </main>

    <?php include("footer.php"); ?>
    </div>

  </body>
</html>
