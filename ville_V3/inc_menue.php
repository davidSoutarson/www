<?php
require('bdd_recherche.php'); ?>

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
          <?php foreach ($pays as $id => $pays) : ?>
            <li>
              <a href="pays.php?id=<?php echo $id ?>"><?php echo $pays ?></a>
           </li>
          <?php endforeach ?>
        </ul>
      </li>


      <li class="menue-administration"> <a  href="#">Administration</a> </li>
        <ul class="sousmenu">
          <li> <a href="/admin/index.php"> Administration accueil </a> </li>
          </ul>

      <li class="menue-uttilisateur"> <a  href="#"> Utilisateur </a>
        <ul class="sousmenu">
          <!-- Utilisation de foreach sur variable isue base de donner user -->
          <li > <a  href="creerUser.php">nouvelle-conection</a> </li>
          <li> <a href="conextion.php">conextion</a> </li>
          <li > <a  href="#">Conecter</a> </li>
          <li class="rouge" > <a  href="deconecter.php">Déconecter</a> </li>
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
