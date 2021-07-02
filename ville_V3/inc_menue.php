<!-- inclustion des requette PHP Mysqé pour afichage -->
<?php require('bdd_recherche.php'); ?>



<div class="menue-prinsipale">
  <nav >
    <ul >
      <li class="menue-accueil"> <a  href="index.php">Accueil</a> </li>

      <li class="menue-ville"> <a href="#"> Villes </a>

        <ul class="sousmenu">
          <!-- Utilisation de foreach sur variable isue base de donner ville -->
          <?php foreach ($villes as $id => $ville) : ?>
            <li>
              <a href="ville.php?id=<?php echo $id ?>"><?php echo $ville ?></a>
           </li>
          <?php endforeach ?>
        </ul>
      </li>

      <li class="menue-pays"> <a href="#"> Pays </a>

        <ul  class="sousmenu">
        <?php
          while ($pays_row= $result2->fetch_array())
          {
            // code... 3.b creation d'un array pour afichage hors de la boucle
           echo "<li> <a href='ville.php?id=$pays_row[pays_id]'>" .$pays_row['pays_nom']." </a> </li>" ;
          }
          ?>
        </ul>
      </li>


      <li class="menue-administration"> <a  href="#">Administration</a> </li>
      <li class="menue-uttilisateur"> <a  href="#"> Utilisateur </a>

        <ul class="sousmenu">
          <!-- Utilisation de foreach sur variable isue base de donner user -->
          <li > <a  href="conexUser.php">nouvelle-conection</a> </li>
          <li > <a  href="#">Conecter</a> </li>
          <li > <a  href="#">Déconecter</a> </li>
        </ul>
      </li>
    </ul>
  </nav>
</div>

<div class="recherche">
  <form class="barreR" method="post">
    <input id=B-recherche type="search" name="r" placeholder="Efectuez une recherchesur Ville Site">
    <input id=R-bouton type="submit" name="envoyer" value="RECHERCHE">
  </form>
</div>
