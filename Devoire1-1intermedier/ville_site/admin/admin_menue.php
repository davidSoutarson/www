<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin_menue</title>
  </head>
  <body>
    <div>
    <h1>Administration du minie site</h1>
    <p>l'administration du site vous permet de d'ajouter
       une nouvelle villes au site
       ou de modifier ou suprimer une ville existante.</p>
  </div>
  <nav>
    <ul>
      <li><a href="index.php">Accueil administrateur</a></li>
      <br>
      <li><a href="ajout.php">ajouter une ville</a></li>
      <li> <a href="../index.php">voire le site</a></li>
    </ul>
  </nav>
  <div>
    <h2>gestion de contenue</h2>
      <?php include('liste.php') ?>
    
  </div>

  </body>
</html>
