(aut_id, nom, prenom, nat)
Ecrire (ecrit_id, aut_id, num_ouv)
Ouvrage (num_ouv, titre, date_par, nom_edit)
Exemplaire (num_ex, num_ouv, lec_num, date_emp, date_ret)
Lecteur (lec_num, nom, prenom, adr)

/*Comment afficher l'ensemble de la table 'auteur' ?  */
selct * FROM auteur
// est la projection
/* 2- Combien y a-t-il de lignes dans la table 'auteur' ?  */
selct count(*) FROM auteur
/* 3- Quels sont les noms et prénoms des auteurs triés par ordre alphabétique ? */
select
      nom
      ,prenom
FROM auteur
ORDER BY
    nom
    prenom

/* 4- Quels sont les noms des auteurs qui n'ont pas de prénoms de renseignés (null) ? */
select


/* 5- Quelles sont les nationalités présentes dans la table 'auteur' ? */
select distinct nat
FROM

/* 6- Quels sont les noms des auteurs français qui ont un prénom de renseigné ? */
/* 7- Quels sont les noms des auteurs de nationalité française ayant pour prénom 'Paul' ? */
SELECT nom FROM Auteur WHERE nat ="francaise" AND prenoms="Paul";

/* 8- Quels sont les noms des auteurs de nationalité française ayant pour prénom 'Paul' ou 'Jean' ? */
SELECT nom FROM Auteur WHERE nat ="francaise" AND prenoms="Paul" or prenoms="Jean"
//ou
SELECT nom FROM Auteur WHERE nat ="francaise" AND prenoms="Paul" like prenoms="Jean"
//
SELECT prenom, nom FROM Auteur WHERE nat ="francaise" AND prenoms="Paul" like prenoms="Jean%"
//
SELECT prenom, nom FROM Auteur WHERE nat ="francaise" AND prenoms="Paul" like trim(prenom)prenoms="Jean%"
/* 9- Quels sont les noms des auteurs de nationalité anglaise ou espagnole ? */
SELECT nom FROM Auteur WHERE nat in ('angaise','espagnole')
/* 10- Quels sont les noms des auteurs qui n'ont pas la nationalité française ? */
SELECT nom FROM Auteur WHERE nat not-in ('angaise','espagnole')
/* 11- Combien y a-t-il d'auteurs de nationalité française ? */
SELECT count(distinct(nat)) as nb_nat FROM auteur
/* 12- Combien y a-t-il de nationalités ? */
/* 13- Combien y a-t-il d'auteurs par nationalité ? */
/* 14- Quels sont les éditeurs et les dates de parution pour le livre 'Pensées philosophiques' ? */
SELECT
/* 15- Même question pour le livre 'Pensées' ? */
/* 16- Donnez les éditeurs et les ouvrages ayant été édités après septembre 2019 ? */
SELECT non_edit
        date_par
        ,titre
FROM ouvrages


/* 17- Quels sont les ouvrages édités entre le 01 separbre 2020 et le 31 décembre 2020 ? */
/* 18- Quels sont les ouvrages édités sur l'années 2018 ? */
/* 19- Combien d'ouvrages de Zola sont présents ? */
//joiture
SELECT count(num_ouvr) as Nb_ouv_Zola
FROM auteur a
INNER jOIN erire e ON (a.aut_id =e.aut_id)
WHERE a.nom
/* 20- Quels sont les noms des ouvrages de Zola ? */
/* 21- Quel auteur a écrit "Les Fleurs du mal" ? *//* 22- Quels sont les auteurs qui ont plus de 3 ouvrages ? */
/* 23- Quelle est la moyenne du nombre d'ouvrages par auteur ? */
/* 24- Quels sont les ouvrages ayant plusieurs auteurs ? */
/* sans requête imbriquée *//* avec une requête imbriquée */
/* 25- Quel est l'auteur avec le plus d'ouvrages ? */
/* sans requête imbriquée *//* avec une requête imbriquée */

//comende ok requette
SELECT* FROM pays INNER JOIN villes ON pays.pays_id = villes.pays_id


SELECT* FROM pays INNER JOIN villes ON pays.pays_id = villes.pays_id WHERE ville_id;
SELECT* FROM pays INNER JOIN villes ON pays.pays_id = villes.pays_id;
SELECT* FROM pays INNER JOIN villes ON pays.pays_id = villes.pays_id WHERE ville_id ORDER BY pays_nom??

SELECT* FROM pays INNER JOIN villes ON pays.pays_id = villes.pays_id WHERE 'condition' ville_nom ORDER BY pays_nom??


SELECT
villes.ville_id,
ville_nom,
ville_texte,
pays_nom,
pays.pays_id
  FROM pays
    INNER JOIN villes ON pays.pays_id = villes.pays_id
      WHERE pays_nom LIKE 'j%'
        ORDER BY pays_nom;

SELECT
villes.ville_id ,
ville_nom,
 ville_texte,
 pays_nom,
 pays.pays_id
    FROM pays
     INNER JOIN villes ON pays.pays_id = villes.pays_id ;

 //test table


/*CREATE TABLE Pets2 AS
( SELECT champ1, champ2
  FROM Pets
  );
*/

/*SELECT pays.pays_id
      ,pays_nom
FROM pays
INNER JOIN villes
WHERE villes.pays_id GROUP BY
pays_nom
ORDER BY pays_nom/*
