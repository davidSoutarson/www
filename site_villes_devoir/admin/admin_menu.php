<?php

//srypte
?>

<!-- afichage html -->

<div class="logot">
  <h1>image logot site ville</h1>
  <h2>Admimistrateur menu</h2>
</div>

<nav>

  <ul>
    <li> <a href="index.php"> accueil_admin</a> </li>
    <li> <a href="../index.php"> accueil_visiteur</a> </li>

    <li><a href="#">ville ou pays</a>
      <ul>
        <li> <a href="../ville.php?id=''">ville_visiteur</a></li>
        <li> <a href="../pays.php?id=''">pays_visiteur</a></li>
      </ul>
    </li>


    <li> <a href="#">getion des droits Admi</a>
      <ul>
        <li> <a href="admin_conection_user.php"> Conection admin</a> </li>
        <li> <a href="admin_new_user.php"> Creation new admin</a> </li>
        <li> <a href="deconecter2.php"> Deconection admin</a> </li>
      </ul>
    </li>


    <li> <a href="#">Uilisateur</a>
      <ul>
        <li> <a href="../new_user.php"> nouvelle Utilisateur</a> </li>
        <li> <a href="../conection.php"> Ce conectez</a> </li>
        <li> <a href="../deconecter.php">  Ce deconecter</a> </li>
      </ul>
    </li>

</ul>

</nav>
