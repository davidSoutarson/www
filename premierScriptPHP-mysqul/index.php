
    <?php
    //Connexion a la base de donner. avec la fonfontion  php mysqli

    $mysqli = new mysqli('localhost','root','','projet_villes');

    // requéte MySQL

    $result = $mysqli->query('SELECT ville_nom FROM villes');

    # tranformation en tableau  et afichage avec while
     while ($row = $result->fetch_array())
     {
       echo $row['ville_nom'] . '<br>';
     }

     $result->free();
     $mysqli->close();

     ?>
