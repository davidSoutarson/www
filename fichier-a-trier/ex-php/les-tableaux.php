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
          # les () parentes  contien les untructin du tableaux
          # 0 1 2 3 dans mon exemple sont les Clef ou index du tableaux
          # => permet l'association clef || index : valeurs Ete Autone Hiver printemps
          # la , delimite les case du tablaux 'contenaire'
          # en fin le ; termine la variable
          $saisons = array( 0 => 'Eté', 1 => 'Autone', 2 => 'Hiver', 3 => 'Printemps' );

         ?>
         <p>explication: $saisons = array( 0 => 'Eté', 1 => 'Autone', 2 => 'Hiver', 3 => 'printemps' ); <br>
             # $saisons et la variable qui contien le tablaux <br>
             # array fontion qui permet de creer le tablaux <br>
             # les () parentes les untructin du tableaux <br>
             # 0 1 2 3 dans mon exemple sont les Clef ou index du tableaux <br>
             # => permet l'association clef || index : valeurs Ete Autone Hiver printemps <br>
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

      </article>

      <article class="boucle-foreach">


        <p>II. La boucle foreach</p>

        <p>
          La boucle foreach est une boucle permettant de parcourir toutes
          les valeurs d’un tableau de données et d’en récupérer la structure.
          Bien que sa syntaxe soit spécifique, son principe de fonctionnement
          est similaire à celui des autres boucles while et for étudiées précédemment :
          la boucle récupère la structure du tableau tant que des valeurs
          existent dans le tableau (cf. le chapitre : les conditions, les opérateurs et
          les boucles).
          Dans l’exemple du tableau avec les saisons, la structure du tableau
          $saisons est la suivante :
       </p>

       <p>exple utilisation forach</p>
      <p>
         $saisons = array( 0 => 'Eté', 1 => 'Autone', 2 => 'Hiver', 3 => 'Printemps' ); <br>

      <br> foreach ($saisons as $clef => $valeur) { <br>
         echo $valeur. ' ';<br>
       }<br>
     </p>

     <p>
       Nous pouvons résumer comme suit ce principe :
       Pour chaque élément du tableau $saisons qui a pour structure (as)
       une clef ($clef) reliée à une valeur ($valeur), $clef et $valeur sont les
       pseudos variables définies qui permettent de récupérer les valeurs réelles
       du tableau au sein de la boucle tant que ces valeurs existent.
     </p>
     <p>
       La seconde ligne contient le echo qui va afficher chaque valeur du
       tableau grâce à la pseudo variable $valeur. Ainsi la pseudo variable
       $valeur va prendre à chaque tour de boucle les différentes valeurs
       contenues dans le tableau $saisons: Été, puis Automne, puis Hiver, puis
       Printemps.
     </p>
        <?php

        $saisons = array( 0 => 'Eté', 1 => 'Autone', 2 => 'Hiver', 3 => 'Printemps' );

        foreach ($saisons as $clef => $valeur) {
          // la pseudo varible $valeur prend  les diferente valeur du tableau:
          // Été, puis Automne, puis Hiver, puis Printemps.
          echo $valeur. ' ';
        }

        echo "<br> ---------voire scripte php---------------- <br>";

        foreach ($saisons as $clef => $valeur) {
          echo $saisons[$clef].' ';
        }
          ?>

      <p>
        Si nous souhaitons afficher les clefs du tableau, il suffit de garder la boucle
        et d’effectuer un echo sur la pseudo variable $clef comme ceci :
      </p>

      <?php
        foreach ($saisons as $clef => $valeur) {
          echo $clef. ' ';
        }
       ?>

      <p> si nous voulon aficher les clef et les valeur:</p>

      <p> nous ecrirons: <br>
          <br>foreach ($saisons as $clef => $valeur) {<br>
            echo $clef. ' ' . $valeur . ' ';<br>
          }<br>
       </p>

      <?php
        foreach ($saisons as $clef => $valeur) {
          echo $clef. ' ' . $valeur . ' ';
        }
       ?>

       <p>La pseudo variable de la clef est facultative</p>
       <p>
         Il n’est pas utile d’indiquer une pseudo variable pour la clef si nous
        n’en avons pas besoin, dans le cas où par exemple nous voudrions
        afficher uniquement les saisons mais pas les clefs.
      </p>

      <?php
        foreach ($saisons as $valeur ) {
          echo $valeur.' ';
        }
       ?>

      </article>
      <article class="affichage-tableau-mode-developeur">

      <h2>IV. print_r et var_dump : affichage du tableau en mode développeur</h2>
      <p>
        En plus de la boucle foreach, il existe deux fonctions permettant
        d’observer la structure et le contenu du tableau. Ces fonctions sont en
        revanche <strong> uniquement réservées au développement .</strong>
      </p>

      <h3>Fonction: print_r</h3>

      <p>La fonction print_r s’utilise comme ceci : print_r($saisons); " entre les balise PHP " </p>
      <?php
       print_r($saisons);
      ?>

      <p>
        Comme il peut être fastidieux d’afficher le code source pour consulter
        le résultat d’un print_r, il est judicieux d’utiliser un <'pre'> avant d’afficher
        le tableau (et de le refermer ensuite).
      </p>

      <?php
        echo '<pre>';
        print_r($saisons);
        echo '</pre>';
       ?>

       <h3>fonction var_dump;</h3>
       <p>La fonction var_dump joue un rôle similaire en donnant directement
         plus d’informations.
       </p>

       <?php
        var_dump($saisons);
        ?>

      <p>
        La structure du tableau est visible directement et pour chaque valeur
        du tableau, nous obtenons :
        – le type de valeur, ici : string, c’est à dire chaîne de caractères (donc
        du texte) ;
        – la longueur de la chaîne de caractères (length = 3).
        Les fonctions print_r et var_dump sont donc très utiles pour le
        développement lorsque nous travaillons avec les tableaux de données.
      </p>

      <h3>V. À propos des clefs du tableau</h3>
      <p>A. clefs numériques</p>

      <p>
        Nous avons créé le tableau $saisons avec des clefs qui sont des nombres :
        0, 1, 2 et 3.
        Lorsqu’une clef est un nombre, les clefs sont dites des clefs numériques.
        Il faut savoir que par défaut, PHP crée des tableaux avec des clefs
        numériques. Il est donc facultatif d’indiquer ces clefs lors de la création
        d’un tableau.
        Ainsi le tableau que nous avons créé de la façon suivante :
      </p>
      <p>  $saisons = array( 0 => 'Eté', 1 => 'Autone', 2 => 'Hiver', 3 => 'Printemps' ); </p>

      <p>Ce tableau aurait pu être créé sans indiquer les clefs :</p>
      <p>Et le résultat aurait été identique :</p>

      <p>  $saison = array('Ete' ,'Automne','Hiver', 'Printemps' );</p>
      <p>utilisation fontion : var_dump comme cecie: var_dump($saisons); pour un affichage developeur compler</p>
      <?php
        $saison = array('Ete' ,'Automne','Hiver', 'Printemps' );

        var_dump($saisons);
       ?>

  </article>

    <article class=" modifierValeursTableauDonnées">

      <p>A. Ajout de valeurs</p>
      <p>Soit le tableau suivant qui contient des couleurs.</p>
      <p>  $couleurs = array('bleu','rouge','vert' );</p>
      <?php
      $couleurs = array('bleu','rouge','vert' );

      echo '<pre>';
      print_r($couleurs);
      echo '</pre>';

      echo "<p>Pour ajouter par exemple la couleur orange, nous affectons simplement <br>
      avec les crochets la valeur « orange » à la variable \$couleurs. </p>
      <p> comme cecie : \$couleurs[] = 'Orange'; et op!!!" ;

      $couleurs[] = 'Orange';

      echo '<pre>';
      print_r($couleurs);
      echo '</pre>';

       ?>
       <h3> ajouter et modifier des valeur d'un tablaux </h3>

       <p>
         Notons que nous pouvons choisir la clef que nous voulons en l’insérant
         entre les crochets. <br>
         Par exemple, ajoutons la valeur rose avec la clef 11 :
      </p>

      <p>$couleurs[11] = 'Rose';</p>

      <?php
        $couleurs[11] = 'Rose';

        echo '<pre>';
        print_r($couleurs);
        echo '</pre>';

        echo "pour modifier une valeur Les crochets permettent d’accéder à n’importe quelle valeur du tableau .<br>
        Il suffit donc d’y accéder avec les  crochets puis de lui affecter une nouvelle valeur
        <p>\$couleurs[3] = 'violet';</p> ";

        $couleurs[3] = 'violet';

        echo '<pre>';
        print_r($couleurs);
        echo '</pre>';
       ?>
     <p>
       Retenons que les crochets permettent d’accéder à n’importe quelle valeur
       du tableau et nous permettent d’ajouter ou de modifier des valeurs.
       Cette simplicité d’ajout et de modification de valeur avec les crochets est
       un point fort du fonctionnement des tableaux en PHP.
     </p>

    </article>

    <article class="DéclarerTableauDonnéesAvecCrochets">
      <p>
        Les crochets permettent également de créer un tableau de données,
        la fonction array n’étant pas le seul moyen. Si nous voulons créer
        un tableau avec une valeur, il suffit de procéder comme si nous
        ajoutions cette valeur à ce tableau.
      </p>

      <?php
        $fruits[] = 'cerise';
        $fruits[] = 'pomme';   //declarer un tableau de donner avec des crocher
        $fruits[] = 'Abrico';
        $fruits[3] ='banane';

        echo '<pre>';
        print_r($fruits);
        echo '</pre>';
       ?>

    </article>
    <article class="suprimer un donner dun tatbleau">

    <p>Il est possible de supprimer des valeurs d’un tableau en utilisant la
        fonction unset.
    </p>

    <p>La fonction unset est une fonction native de PHP qui permet de
      supprimer des variables et nous avons vu qu’un élément de tableau
      est une variable, il suffit donc d’effectuer un unset sur cet élément.
      Ainsi si nous souhaitons supprimer la valeur rose du tableau couleur :
    </p>

    <p>  unset($couleurs[11]); </p>

        <?php
        echo "avant <br>";
        echo '<per>';
        print_r($couleurs);
        echo '</pre>';
          unset($couleurs[11]);
      echo "<br> appret <br>";
// utilisation foreach pour aficher le tableaux

          foreach ($couleurs as $key => $value) {

            echo $key. '_' .$value. ' ';
            // code...
          }
        ?>

      <p>La fonction unset permet également de supprimer un tableau de données
        car pour mémoire un tableau de données est une variable.
        Il suffit d’affecter unset au tableau, comme ceci :
      </p>

        <p>unset($couleurs)</p>
    </article>

    <article class="ajouterVariblesDansTableu">
      <p>
        Il n’existe aucune difficulté à ajouter des variables dans un tableau.
        Cela revient à ce que les valeurs de ces variables deviennent les valeurs
        du tableau.
      </p>
      <?php
    //  $a ='texte';
      // $b[] = $a;

      // var_dump($b);

       ?>
      <h1>les tablaux multidimensionnels: les tableaux de tableaux</h1>

      <p>
        Puisque les tableaux sont des variables, il est également possible
        d’ajouter un tableau dans un tableau.
    </p>

    <p>
          $a = 'texte'; // on declare la varible a dans le quelle on stoque la chaine de caractères 'texte' <br>
          $b[] = $a;//on declare b :$c dans le quelle on stoque la varible a $a <br>
          $c[] = $b; //on declare c :$c dans le quelle on stoque le tableau b $b <br>

          print_r($c) //on afiche le tableaux c <br>
  </p>

    <?php
      $a = 'texte'; // on declare la varible a dans le quelle on stoque la chaine de caractères 'texte'
      $b[] = $a;//on declare b :$c dans le quelle on stoque la varible a $a
      $c[] = $b; //on declare c :$c dans le quelle on stoque le tableau b $b

      print_r($c); //on afiche le tableaux c
      var_dump($c);
     ?>

     <p>
       Nous sommes en présence d’un tableau contenu dans un tableau.
       Nous parlons alors de tableau multidimensionnel, c’est-à-dire qu’il
       possède plusieurs dimensions ou niveaux. On parle également
       de tableaux imbriqués ou de tableaux de tableaux (un tableau
       contenant des tableaux).
     </p>
     pLa clef 0 du tableau $c est associée à une valeur qui est le tableau $b.
     La clef 0 du tableau $b est associé à une valeur qui est chaîne de
     caractères « texte ».</p>
     <p>Pour manipuler ou modifier le tableau, nous allons comme
       précédemment utiliser les crochets.
     </p>
      <p>
        Pour accéder au tableau $b, nous utiliserons la syntaxe $c[0] puisque
        la clef 0 correspond à ce tableau $b.
    </p>
    <p>
      Pour accéder à la valeur « texte », et puisque cette valeur possède la
      clef 0 du tableau $b, et que ce tableau $b est une valeur du tableau $c,
      nous utilisons deux niveaux de crochets : $c[0][0].
    </p>
    <p>Affichons la valeur texte avec la bonne syntaxe :</p>

    <p> echo $c[0][0];</p>

     <?php
     echo $c[0][0];
     ?>
     <p>Si nous voulons ajouter un nouveau tableau $b2 au tableau $c, la syntaxe sera :</p>

     <?php
     $b2 = array ('texte 2', 'texte 3' ) ;
     $c[] = $b2;

     echo '<pre>';
     print_r($c);
     echo '</pre>';

     echo "Affichons la valeur texte 2 avec la bonne syntaxe :";

     echo $c[1][0];

      echo "Affichons la valeur texte 3 avec la bonne syntaxe :";

      echo $c[1][1];

      ?>

      <h2>un peut de pratique</h2>
      <?php
        $saisons = array(
          0 => array ('nom' => 'Ete ' , 'image' => 'ete.jpg'),
          1 => array ('nom' => 'Automne ' , 'image' => 'automne.jpg '),
          2 => array ('nom' => 'Hiver ' , 'image' => 'hiver.jpg '),
          3 => array ('nom' => 'Printemps ' , 'image' => 'printemps.jpg '),
        );

        echo $saisons [2] ['nom'];//Hiver
        echo $saisons [3] ['image'];//printemps.jpg

        echo " <br> ******** <br>";

        foreach ($saisons as $saison) {

          echo $saison['nom'];
          echo '<img src="image/'.$saison['image'] .' "/>';
        }
       ?>

    </article>

    </main>
  <!-- fin  du main cuntenue de la page -->
    <footer>

    </footer>
  </body>
</html>
