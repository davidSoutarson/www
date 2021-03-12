
    <?php
    #1. une partie dédiée à la connexion au serveur MySQL
    #Conction a la base de donner. avec la fonfontion  php mysqli
    $mysqli = new mysqli('localhost','root','','projet_villes');

    #2 requéte MySQL

    $result = $miysqli->query('SELECT ville_nom FROM villes');

    # tranformation en tableau  et afichage avec while
     while ($row = $result->fetch_array())
     {
       echo $row['ville_nom'] . '<br>';


     }

     ?>
