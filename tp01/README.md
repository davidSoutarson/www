# PHP Niveau debutant
***
se ficher a pour but de mieux comprendre php et de pouvoir utiliser se lengage dans des proger de sinple
1. instalation
2. bien démarrer PHP
3. Les variable et Constent Voire code source
4. les conditon et les boucle Voire code source
5. les tableau Voire code source
6. les Varibles prédefinies et Varibles externes Voire code source
7. les formulaires Voire code source

la metion voire le code source sinifie que pour bien conpre se qui attait fais <br>
il faux lire le code avec la fontin goole aficher le code souse de la page
***
## instalation de php
php et un langage informatique "de tipe seveur" pour povoire lutiliser il vous faut intaller
"Wampserver" sur votre machine Wampserver et un serveur local
1. definition serveur locale:

nous ecrirons no ficher "scripte php" dans le dosier wwww de Wampserver

***
## bien demarer
1. ou eccrie le du PHP
2. creation  d'un script php

### a. Afficher des chaînes de caractères avec PHP
1. Étape 1 : En premier  il est nécessaire d’utiliser une fonction
d’affi chage intitulée echo.
2. Étape 2 : Ensuite, il est obligatoire en PHP d’entourer les chaînes
de caractères avec des single quotes ou double quotes signifiant <br>
respectivement apostrophes ou guillemets en anglais,
3. Étape 3 : Puis, à l’intérieur des balises PHP, nous utilisons echo pour
procéder à l’affi chage de notre phrase.
4. Étape 4: Enfi n, une ligne de code en PHP se termine par un point-virgule
pour signaler la fi n de ligne.

En résumé pour affi cher la phrase Hello World! en PHP, le code complet
est :

 \<?php <br>
  echo "Hello wrold!" ;<br>
 ?> " <br>

### la sintax de base:

 atantion sigle quotes ou double quotes ou antislash :Alt Gr + touche 8 <br>
permet dechaper un caractére

les commeter: /* */ ; // ; # sons les diferant type de comenter
Notons pour conclure sur ce point que la plupart des éditeurs de code <br>
permettent de distinguer les commentaires du code PHP en les colorisant différemment.<br>

 ***
## les variable et constante

Les variables sont un élément fondamental de tout langage de programmation. <br>
Elles peuvent être des nombres, des chaînes de caractères, des tableaux, des résultats mathématiques, etc.<br>
Les variables sont considérées comme des boîtes pratiques dans lesquelles nous rangeons ces<br>
données que nous pourrons ensuite utiliser ou modifier quand nous le voulons.<br>

Les variables en PHP sont écrites avec : <br>
– le symbole dollar $ qui permet d’identifier une variable ;<br>
– le nom de la variable. <br>
Elles sont donc sous la forme : $nomDeLaVariable. <br>

Elles peuvent contenir des informations très variées. Par exemple, nous pouvons enregistrer <br>
dans une variable le jour de la semaine (prenons lundi). Cette variable que nous pourrions <br>
appeler $jour sera utilisable en permanence tout au long de notre script et sa valeur pourra <br>
être modifiée lorsque le jour de la semaine changera. <br>
Cette variable pourra donc contenir « lundi » ou « mardi » ou n’importe quel jour de notre <br>
choix. Nous disons que « lundi » ou « mardi » est la valeur contenue dans la variable. <br>
