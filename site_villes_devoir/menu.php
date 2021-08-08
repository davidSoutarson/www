<?php require 'header.php'; ?>

<?php
//srypte
 ?>
<!-- afichage html -->

<div class="logot">
  <h1>image logot</h1>
</div>

<nav>
  <ul>
    <li> <a href="index.php"> accueil</a> </li>

    <li> <a href="ville.php?id=''">ville</a>
        <ul>
          <li> <?php require 'recherche_villes.php' ?></li>
        </ul>
  </li>
    <li> <a href="pays.php?id=''">pays</a>
        <ul>
          <li> <?php require 'recherche_pays.php' ?></li>
        </ul>
    </li>

    <li> <a href="admin/index.php">Admimistrateur</a></li>
      <ul>
        <li> <a href="admin/admin_conection_user.php"> Conection admin</a> </li>
        <li> <a href="admin/admin_new_user.php"> Creation</a> </li>
        <li> <a href="admin/deconecter2.php"> Deconection admin</a> </li>
      </ul>
    </li>
    <li> <a href="#">Uilisateur</a></li>
      <ul>
        <li> <a href="new_user.php"> nouvelle Utilisateur</a> </li>
        <li> <a href="conection.php"> Ce conectez</a> </li>
        <li> <a href="deconecter.php">  Ce deconecter</a> </li>
      </ul>
    </li>
  </ul>
</nav>
