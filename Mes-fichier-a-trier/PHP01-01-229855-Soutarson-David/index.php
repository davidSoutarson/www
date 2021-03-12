<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title>accueil covoiturage</title>
  </head>
  <body>
    <div id='wraper'>

      <header>
        <div class="logo">

        <a href="index.php"> <img src="img/logo-covoit.jpg"width="100" height="100" alt="logo representen un paneau de sigalisation "></a>

        </div>
        <div class="navBar">
          <nav>
            <ul>
        <!-- liste lien pointant ver le ficher a aficher -->
              <li> <a href="index.php">accueil</a>  </li>

              <li> <a href="vue-api-php/formulaire.php">Je recherche un covoiturage</a>  </li>

            </ul>
          </nav>
        </div>
      </header>

    <?php include 'vue-api-php/main-accueil.php' ?>


    <?php include 'vue-api-php/footeur.php' ?>

    </div>

  </body>
</html>
