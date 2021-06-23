<!-- inclustion des requette PHP Mysqé pour afichage -->
<?php require('bdd_recherche.php'); ?>
<div class="menue-prinsipale">
  <nav >
    <ul >
      <li class="menue-accueil"> <a  href="#">Accueil</a> </li>

      <li class="menue-ville"> <a href="#"> Villes </a>

        <ul class="sousmenu">
          <!-- Utilisation de foreach sur variable isue base de donner ville -->
          <li >  <a  href="#"> récup lien non ville 1 </a> </li>
          <li >  <a  href="#"> récup lien non ville 2 </a> </li>
          <li >  <a  href="#"> récup lien non ville 3 </a> </li>
          <li >  <a  href="#"> récup lien non ville 4 </a> </li>
        </ul>
      </li>

      <li class="menue-pays"> <a href="#"> Pays </a>

        <ul  class="sousmenu">
          <!-- Utilisation de foreach sur variable isue base de donner pays -->
          <li >  <a  href="#"> récup lien non pays 1 </a> </li>
          <li >  <a  href="#"> récup lien non pays 2 </a> </li>
          <li >  <a  href="#"> récup lien non pays 3 </a> </li>
          <li >  <a  href="#"> récup lien non pays 4 </a> </li>
        </ul>
      </li>


      <li class="menue-administration"> <a  href="#">Administration</a> </li>
      <li class="menue-uttilisateur"> <a  href="#"> Utilisateur </a>

        <ul class="sousmenu">
          <!-- Utilisation de foreach sur variable isue base de donner user -->
          <li > <a  href="#">nouvelle-conection</a> </li>
          <li > <a  href="#">Conecter</a> </li>
          <li > <a  href="#">Déconecter</a> </li>
        </ul>
      </li>
    </ul>
  </nav>
</div>

<div class="recherche">
  <form class="barreR" method="post">
    <input type="search" name="r" placeholder="RECHERCHE">
    <input id=R-bouton type="submit" name="envoyer" value="RECHERCHE">
  </form>
</div>
