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

PHP Hypertext Preprocessor

le php séxecute côté serveur et permet de dynamiser un site.

un site dynamique = change tout seul en fonction du visiteur ou de ninporte quel autre <br>
parametre (heure, saison, etc.) permete d'interagire avec les visiteur

pancer au viteur se conectent a leur compt via un etpase de conection sur un site; <br>

les concurent de PHP: PHP C/c++; Django: Piton ; JEE: java ; Ruby and rayse: Ruby ; etc...
les langage siter son conplementer ou enfant parent :

### Pourqoi le Php?
1. Simplicité de prise en main.
2. Grande communauté
3. Fonction prétes à lemploi <br>
-personelement se quiconte pour developer un bon programe se nes pas tant la thechno du developeur qui conte <br>
Mes pluto sa tres bonne metrise des basse sur cette thechno sa curiositer et sa logique de programation "please keep it simple "<br>
-atention se nest pas pour  autemt quil faille iniore les autre langage car plus vous aler conaitre conaitre d otre langage plus vous aller
polivat soyer curieu soyer pasioner. <br>

***
## instalation de php
php et un langage informatique "de tipe seveur" pour povoire lutiliser il vous faut intaller
"Wampserver" sur votre machine Wampserver et un serveur local

rapele des consepte de base.

### Relation client / serveur

1. client = Ordinateur qui demende une page web
2. serveur = Mega-Ordinateur, qui ne sarrête jamis et qui vas envoyer la page web <br>
demendée au client
3. Pour un site dynamique, le serveur génère potentellement différemment une pagge donnée pour <br>
chaque visiteur qui la demende.

-Le PHP GENERE DU HTML:

.un client  nest pas cable de lire du PhP. <br>
.Rôle principal et et intérét du PHP = génèrer et envoyer une page en HTML (ou en CSS) différente pour chaque visiteur.

wamps manps
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

### Les variables en PHP sont écrites avec : <br>
– le symbole dollar $ qui permet d’identifier une variable ;<br>
– le nom de la variable. <br>
Elles sont donc sous la forme : $nomDeLaVariable. <br>

ex  $nomDeLaVariable = 123 ;
    $nomDeLaVariable = "valeur" ;

Elles peuvent contenir des informations très variées. Par exemple, nous pouvons enregistrer <br>
dans une variable le jour de la semaine (prenons lundi). Cette variable que nous pourrions <br>
appeler $jour sera utilisable en permanence tout au long de notre script et sa valeur pourra <br>
être modifiée lorsque le jour de la semaine changera. <br>
Cette variable pourra donc contenir « lundi » ou « mardi » ou n’importe quel jour de notre <br>
choix. Nous disons que « lundi » ou « mardi » est la valeur contenue dans la variable. <br>

### II  Nommer une variable

les varibles doive avoir un nom explisite: $firstnames = david ; <br>
les variable ne doive pas contenir de  caractères spéciaux ni accentués (é, ô, ù, *, #, etc.) ;<br>
Un nom de variable s’il contient plusieurs mots, doit se noter en lowerCamelCase : (exemple : $maVariableEstLongue) ;<br>

atention: Le nom est sensible à la casse (majuscule/minuscule). Ainsi $abc est
une variable différente de $ABC, $Fruit est une variable différente de
$fruit

### III  Utiliser une variable


### IV Concaténer une variable

Il est souvent nécessaire d’afficher un texte qui doit contenir une variable.

Pour afficher en même temps une chaîne de caractères et une variable,
il suffit de placer ces deux éléments l’un après l’autre en les séparant par
un point.

Le point permet de juxtaposer les deux éléments. On parle d’opérateur
de concaténation. Il est recommandé de mettre un espace avant et après
le point pour une meilleure lisibilité.
