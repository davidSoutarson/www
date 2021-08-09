<?php
session_start(); //inisialisation de la session
if (!isset($_SESSION['admin_compte_cree']) AND !isset($_SESSION['admin_conectez']) ) {
  header('location:admin_conection_user.php');
}

require 'admin_header.php';
require 'admin_menu.php';

//teste pays liste
$result = [];
$pays_liste = [];
$result = $mysqli->query('SELECT DISTINCT	pays_id as pid
                                         ,pays_nom as pnom
                                                 FROM pays
                                                         ORDER BY pnom ');

while ($row = $result->fetch_array())// a pour une liste
{
  $pays_liste_pid = $row['pid'];
  $pays_liste_pnom = $row['pnom'];

  $pays_liste[$pays_liste_pid]['pid'] = $pays_liste_pid;
  $pays_liste[$pays_liste_pid]['pnom'] = $pays_liste_pnom;
}
//fin teste pays liste


//récuperation des variables
if (isset($_POST['submit_form']))
{
  $ville_nom = $_POST['ville_nom'];
  $ville_texte = $_POST['ville_texte'];
  //verification du contenue des variables
  if((empty($ville_nom)) OR empty($ville_texte))
  {
    $message = '<p class="error"> vous dever sesir le nom d\'une vile est sa présentation. </p>';
  }
  else
  {
    // ville exite dans la basse ?
    // efetuon une requete SELECT avec count ()
    $result = $mysqli->query('SELECT count(ville_id)
    FROM villes WHERE ville_nom ="'. $ville_nom .'"');
    $row = $result->fetch_array();
    //$row[0] contient la valeur par count() de Mysql
    if($row[0] > 0)
    {
      $message = '<p class="error"> La ville est déjat enregistrée. </p>';
    }
    else
    {
      // requete insert into

          $id_pays = $_POST["pays_id"];

      if($mysqli->query('INSERT INTO villes
        (ville_nom, ville_texte, pays_id)
        VALUES
        ("'. $ville_nom .'", "'. $ville_texte .'" ,"'.$id_pays.'")'))
        {
          $message =  '<p class="message">Ajout de la ville: '.$ville_nom.' est efectuer '.$id_pays.' </p>';
        }
        else
        {
          $message =  '<p class="error">Ajout de la ville: '.$ville_nom.' n\'est pas efectuer </p>';
       }
    }
  }
}
     ?>

     <div>
       <h1>Ajout de ville</h1>
       <?php if(isset($message)) echo $message  ?>
       <form  method="post">
         <p>Nom de la ville : <input type="text" name="ville_nom"></p>

         <p>texte presentation </br>
         <textarea name="ville_texte" cols="32" rows="8"></textarea>
         </p>

         <!-- teste liste pays pour un fonction plus egonomique -->

         <p>atribuer un pays a une ville</p>
         <p>Si le pays n'ai pa dans la liste ajouter le avant envoie:   <li><a href="ajoutDEPays.php">FONCTION ajouter un Pays</a></li> </p>


        <!-- Lingne 55 pays_id vide par defaut "peut estetique!" -->
          <input type="hidden" name="pays_id" value="<?php //suprime ereure ligne 55 $_POST['pays_id'] vide par defaut ?>"/>

          <?php foreach ($pays_liste as $plist) : ?>

            <?php if ($plist['pid'] ): ?>

              <li> 	<input  type="radio"
                    name="pays_id"
                    value="<?php echo $plist['pid'] ?> "/>
                    <?php echo $plist['pid'] ?> <!--indi cateure de pays-->
                  <?php echo $plist['pnom'] ?>
              </li>

            <?php endif ?>
          <?php endforeach ?>

           <p> <input type="submit" name="submit_form" value="valider"></p>

           <!--fin teste liste pays pour un fonction plus egonomique -->

       </form>
     </div>
  </body>
</html>
