<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>les tablaux en php</title>
  </head>
  <body>
    <header>

    </header>

    <!-- debut du main contunu prinsipale de la page -->
    <main>
      <article class="prinsipe-fonctionnement">
        <h2>prinsipe et fonctionnement</h2>
        <p>Un tableau de données permet de stocker des valeurs et de les ranger de
          façon ordonnée en les associant à des clefs uniques (que l’on nomme
          parfois des indices ou des index).<br>
          Créons, par exemple, le tableau suivant qui liste les saisons et attribue
          un numéro à chaque saison.<br>
          Il est aisé de relier par exemple l’automne au numéro 1 et le printemps
          au numéro 3 car le rôle du tableau est justement d’associer les saisons
          aux numéros.<br>
          Il suffit de considérer que les saisons sont les valeurs et que les numéros
          sont les clefs pour avoir compris le principe du tableau de données.
          Le tableau de données est parfois appelé un array car c’est la fonction
          array qui permet de créer ces tableaux.<br>
          Examinons la syntaxe en PHP en reprenant l’exemple du tableau
          précédent. Nous allons donc associer chaque saison à sa clef avec
          la fonction array comme ceci :<br>
        </p>
        <p>1er exemple de tablaux</p>
        <?php
          # $saisons et la variable qui contien le tablaux
          # array fontion qui permet de creer le tablaux
          # les () parentes les untructin du tableaux
          # 0 1 2 3 dans mon exemple sont les Clef ou index du tableaux
          # => permet l'asotiation clef || index : valeurs Ete Autone Hiver printemps
          # la , delimite les case du tablaux 'contenaire'
          # en fin le ; termine la variable
          $saisons = array( 0 => 'Eté', 1 => 'Autone', 2 => 'Hiver', 3 => 'Printemps' );

         ?>
         <p>explication: $saisons = array( 0 => 'Eté', 1 => 'Autone', 2 => 'Hiver', 3 => 'printemps' ); <br>
             # $saisons et la variable qui contien le tablaux <br>
             # array fontion qui permet de creer le tablaux <br>
             # les () parentes les untructin du tableaux <br>
             # 0 1 2 3 dans mon exemple sont les Clef ou index du tableaux <br>
             # => permet l'asotiation clef || index : valeurs Ete Autone Hiver printemps <br>
             # la , delimite les case du tablaux 'contenaire' <br>
             # en fin le ; termine la variable
        </p>
        <p>
          Un point très important est de bien voir que nous affectons ce tableau à
          la variable $saisons et que donc la variable $saisons devient un tableau
          de données. Les tableaux de données sont donc des variables. De ce fait
          nous allons donc pouvoir utiliser ce tableau de données, et par exemple
          afficher une valeur du tableau ou bien toutes les valeurs
        </p>
        <p> Affichage d’une valeur du tableau </p>

        <?php
        echo $saisons [2]. '<br>';
        echo $saisons [3]. '<br>';
        ?>

        
        <p>II. La boucle foreach</p>
        <?php
        foreach ($saisons as $clef => $valeur) {
          echo $valeur. '<br>';
        }

        foreach ($saisons as $clef => $valeur) {
          echo $saisons[$clef].' ';
        }
          ?>


      </article>

    </main>
  <!-- fin  du main cuntenue de la page -->
    <footer>

    </footer>
  </body>
</html>
