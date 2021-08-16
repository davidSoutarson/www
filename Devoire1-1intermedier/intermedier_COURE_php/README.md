# intermediaire-devoir-php

## DEVOIRE n° 1

**DEMANDE: REALISATION _D'UN SUIVI DES RECHERCHES_ PAR INTERNAUTE**

Dévelopez le _script qui permet d'enregitrer dans la base toutes les recherches effectuée_ sur le site des villes par un internaute.

_Vous n’enregistrerez que les recherches ayant donné un **résultat**_.

Vous **afficherez** ensuite en front-office, **uniquement pour cet internaute**, sa liste de recherche sous forme de **liens**.

**Exemple** : si un utilisateur a recherché « Paris », « Rome » et « Ber » alors nous afficherons Paris et Rome.

**Conseils**
1) **Commencez par designer votre base de données**.

Les recherches peuvent être stockées dans une table user_searchs (par exemple) comportant les champs
suivants :

Id du user (user_id) dans la table user

Id de la ville (ville_id) dans la table ville

Ces deux derniers champs formant une clé unique.

2) Créez un script de recherche permettant :

a) **d’afficher** un **formulaire de recherche** où l’utilisateur **entre une ville** ;

b) de **retrouver et d’afficher les détails d’une ville (si elle existe) lorsque l’utilisateur clique sur un lien** ;


c) de stocker **dans la table user_search les villes recherchées par l’utilisateur**.

3) **Améliorez** votre script **pour afficher** au-dessus ou en dessous de votre formulaire de recherche **les recherchesdéjà effectuées**.

info(aide!)

– **retrouvez ces recherches grâce à la table user_searchs** ;

– **les urls doivent avoir** en paramètre **le numéro de la ville (ville_id)** afin de pouvoir afficher les détails concernant cette ville.

### Pour je doit metriser les rerquet Mysqul les sesions les cookie ###
