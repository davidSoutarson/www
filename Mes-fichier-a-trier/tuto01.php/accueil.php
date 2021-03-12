<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>page d'accueil</title>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <header>
        <?php
        include("header.php");/*cette ligne est le logo du site*/
        ?>
        <menu>
          <?php
            include("menu.php");/*cette ligne est le memu du site*/
          ?>
        </menu>
      </header>
    <h1>nos coups de coeur</h1>
      <p>
      ceci et un teste. <br/>
      blabla blalba !!!
      </p>
    <footer>
      <?php
      include("footer.php");/*ligne et pied de pages du site*/
      ?>
    </footer> 
  </body>
</html>
