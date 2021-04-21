<?php

//teste php doc

/*  $mysqli = new mysqli("localhost", "root", "", "projet_villes");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
 //il faut explisiter le por si dif 3306
$mysqli = new mysqli("127.0.0.1", "root", "", "projet_villes", 3308);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";*/

//________________________fin de test php doc___________________________

    //Connexion a la base de donner


    $mysqli = new mysqli('localhost', 'root', '', 'projet_villes');
#__________________________teste comme dans le cours____________________________
    //$mysqli = new mysqli('localhost', 'root', '', 'projet_villes',3308);

      #echo var_dump($mysqli);
#________________________________teste _________________________________________
      #__________________________requéte___________________________________
    // requéte MySQL reposent sur SELECT et FROM

    // en francai courant « obtenir toutes les valeurs contenues dans le champ ville_nom de la table villes »
    //pour obtenier tout les vaveur contenue dans le champ id

    $result = $mysqli -> query('SELECT ville_id , ville_nom FROM villes');

    #echo var_dump($result);

    // tranformation en tableau  et afichage avec while

     while ($row = $result->fetch_array())
     {
       echo $row ['ville_id'] . ' - ' . $row ['ville_nom'].'<br>';
     }

     $result->free(); /* Liberation des résultats */

     $mysqli->close(); /* Fermeturde la connexion */


?>
