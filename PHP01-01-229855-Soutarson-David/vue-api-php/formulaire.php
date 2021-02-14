<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>fomulaire</title>
 <link rel="stylesheet" href="../css/master.css">
  </head>
  <body>
    <div id= wraper>

      <?php include 'header.php' ?>
      <main>

<?php $tabletrager = [
  'id'=>0, ['depart'=>'paris','arriver' => 'nantes','proposheuredepart'=>'11:00','proposheurearriver'=> '12:34' , 'conducteure' => 'thomas'],
  'id'=>1, ['depart'=>'oreléans','arriver' => 'nantes','proposheuredepart'=>'05:15','proposheurearriver'=> '09:32' , 'conducteure' => 'mathieu'],
  'id'=>2, ['depart'=>'dublin','arriver' => 'tours','proposheuredepart'=>'07:23','proposheurearriver'=> '08:50' , 'conducteure' => 'nathanaël'],
  'id'=>3, ['depart'=>'paris','arriver' => 'oreléans','proposheuredepart'=>'03:00','proposheurearriver'=> '05:26' , 'conducteure' => 'clément'],
  'id'=>4, ['depart'=>'nice','arriver' => 'nice','proposheuredepart'=>'10:00','proposheurearriver'=> '12:09' , 'conducteure' => 'audrey'],
  'id'=>5, ['depart'=>'nice','arriver' => 'nantes','proposheuredepart'=>'10:40','proposheurearriver'=> '13:00' , 'conducteure' => 'pollux'],



];
?>

        <h1>covoiturage</h1>
        <div class="contenaire">

          <form class="form-covoit" action="formulaire.php" method="post">
<!--  debut formulaire php _______________________________________________________________ -->

<div class="box-nom ">
          <p> <label for="nom">ecriver votre nom </label></p>
          <input type="text" name="nom" value=""  placeholder="">
          </div>

<div class="box-prenom ">
          <p> <label for="prenom">ecriver votre prenom </label></p>
          <input type="text" name="prenom" value="" placeholder="">
          </div>

<div class="box-email ">
          <p> <label for="email">ecriver votre email </label><p/>
          <input type="text" name="email" value=""  placeholder="">
          </div>

<div class="box-tel ">
          <p> <label for="telephone">ecriver votre N° teléphone </label></p>
          <input type="number" name="telephone" value=""  placeholder="">
          </div>

<div class="box-ville">


          <?php

          echo '<p> <label for="ville_de_depart">choisiser votre ville</label></p>';
          echo '<select id="ville_de_depart" class="" name="ville_de_depart">';
           foreach ($tabletrager as $tabletrager){
                   $ville_table = $tabletrager ['depart'];

                    echo "<option  value = '$ville_table'>" .$ville_table.  "</option>";

          }
           echo "</select>";



          ?>

          </select>
        </div>

        <p> <label for="v_heure"> ecriver votre heure de depart :</label></p>
        <input id="v_heure" type="time" name="v_heure" value="" >

<div class="bouton">
          <input type="submit" name="validation" value="recherche" >
          </div>

<?php
# ___________ ci le fomulaire et vide _____________________________________________________________-->
if(
    (!isset($_POST['validation']) )//ci se nes pas valider
    OR
    ( empty($_POST['nom']) ) //si la varible nom et vide
    OR
    ( empty($_POST['prenom']) ) //si la varible prenon et vide
    OR
    ( empty($_POST['email']) ) //si la varible emaile et vide
    OR
    ( empty($_POST['telephone']) ) //si la varible tel et vide
    OR
    (!isset($_POST['ville_de_depart']) )//si choix de ville  exite pas
    OR
    (empty($_POST['v_heure']) )

  )
          {
            echo"vous naver pas remplie le formulaire";
          }
else {
  $validation = $_POST ['validation'];
  $nom = $_POST ['nom'];
  $prenom = $_POST ['prenom'];
  $email = $_POST ['email'];
  $telephone = $_POST ['telephone'];
  $ville_de_depart = $_POST ['ville_de_depart'];
  $v_heure =  $_POST ['v_heure'];

  echo "<p>bonjour '.$nom.' , ".$prenom." vous aver ".$validation." le formulaire de contact</p>";
  echo "<p>verier que les information son exate.</p>";
  echo "<p>pour permtre au conducter de vous contacter</p>";
  echo "<p>votre maile est : ".$email."</p>";
  echo "<p>votre téléphone est le :" .$telephone."</p>";
}


# 1 champ non________________________________________________________________________-->            if (empty($prenom))
          if (!empty($nom))
            {
                #echo"<p>nom et :'.$nom.''</p>";
            }
            else {
              echo"<p>champ 01 nom 8) pas remplie</p>";
            }
# 2 champ prenom____________________________________________________________________-->
            if (!empty($prenom))
            {
                #echo"<p>prenom et :'.$prenom.''</p>";
            }
            else {
              echo"<p>champ 02 nom 8) pas remplie</p>";
            }


# 3 champ email___________________________________________________________________-->
          if (!empty($email))
          {
            #echo"<p> maile et :'.$email.''</p>";
          }
          else {
            echo"<p>champ 03 nom 8) pas remplie</p>";
          }

# 4 champ telephone________________________________________________________________________-->
            if (!empty($telephone))
            {
              #echo"<p> numéro :'.$telephone.''</p>";
            }
            else {
              echo"<p>champ 04 nom 8) pas remplie</p>";
            }

#  5 champ vile a selectoner________________________________________________________________-->

            if (isset($ville_de_depart))
              {
                echo'<p> ville sectioner :' .$ville_de_depart. '</p>';
             }
             else {
               echo"<p>champ 05 nom 8) pas remplie</p>";
             }
#  6 champ vile a selectoner________________________________________________________________-->
            if (isset($ville_de_depart))
            {
              echo'<p> ville sectioner :' .$v_heure. '</p>';
            }
            else {
              echo"<p>champ 05 nom 8) pas remplie</p>";
            }


# 7 _____fin de si fomulaire envoiyer_____________________________________________________________-->
            if (isset($validation))
            {
              $tabletrager = [
                'id'=>0, ['depart'=>'paris','arriver' => 'nantes','proposheuredepart'=>'11:00','proposheurearriver'=> '12:34' , 'conducteure' => 'thomas'],
                'id'=>1, ['depart'=>'oreléans','arriver' => 'nantes','proposheuredepart'=>'05:15','proposheurearriver'=> '09:32' , 'conducteure' => 'mathieu'],
                'id'=>2, ['depart'=>'dublin','arriver' => 'tours','proposheuredepart'=>'07:23','proposheurearriver'=> '08:50' , 'conducteure' => 'nathanaël'],
                'id'=>3, ['depart'=>'paris','arriver' => 'oreléans','proposheuredepart'=>'03:00','proposheurearriver'=> '05:26' , 'conducteure' => 'clément'],
                'id'=>4, ['depart'=>'nice','arriver' => 'nice','proposheuredepart'=>'10:00','proposheurearriver'=> '12:09' , 'conducteure' => 'audrey'],
                'id'=>5, ['depart'=>'nice','arriver' => 'nantes','proposheuredepart'=>'10:40','proposheurearriver'=> '13:00' , 'conducteure' => 'pollux'],

              ];
              echo '<p> <label for="trager">choisiser votre trager</label></p>';
              echo '<select id="trager" class="" name="trager">';
              foreach ($tabletrager as $tabletrager) {

                      $p_depart = $tabletrager ['depart'];
                       $p_heure_depart = $tabletrager  ['proposheuredepart'];
                        $p_arriver = $tabletrager ['arriver'];
                         $p_heure_arriver = $tabletrager ['proposheurearriver'];
                         $p_conducters = $tabletrager ['conducteure'];

                  if((($ville_de_depart) == ($p_depart)) and ( ($v_heure)<=($p_heure_depart))){
                    echo "<option  value ='.$p_conducters. ' par a' .$p_heure_depart.' heure de : ' .$p_depart.' , arive a  ' .$p_arriver. ' a : '.$p_heure_arriver.>"
                    .$p_conducters. ' par a ' .$p_heure_depart.' heure de : ' .$p_depart.' arive a ' .$p_arriver.' a : '.$p_heure_arriver."</option>";

                  }

              }
            };






# #####################test apprer conditonele#################################



#var_dump($_POST);
/*
echo '<p> <label for="trager">choisiser votre trager</label></p>';
echo '<select id="trager" class="" name="trager">';
foreach ($tabletrager as $tabletrager) {

        $p_depart = $tabletrager ['depart'];
         $p_heure_depart = $tabletrager  ['proposheuredepart'];
          $p_arriver = $tabletrager ['arriver'];
           $p_heure_arriver = $tabletrager ['proposheurearriver'];
           $p_conducters = $tabletrager ['conducteure'];


      echo "<option  value ='.$p_conducters. ' par a' .$p_heure_depart.' heure de :' .$p_depart.'arive a' .$p_arriver.'a : '.$p_heure_arriver.>"
      .$p_conducters. ' par a' .$p_heure_depart.' heure de :' .$p_depart.'arive a' .$p_arriver.'a : '.$p_heure_arriver."</option>";

}
*/
?>

<!-- ________________________________________________________________________-->

            </form>

          </div> <!-- fin div contenaire -->
          <?php include 'footeur.php' ?>
        </div> <!-- fin div wraper -->

      </main>

    </div>
  </body>
</html>
