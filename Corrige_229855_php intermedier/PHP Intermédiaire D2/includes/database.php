<?php
    $mysqli = new mysqli('localhost', 'root', '', 'projet_ecommerce');
    if (mysqli_connect_errno()) {
        printf("Échec de la connexion : %s\n", mysqli_connect_error());
        exit();
    }
?>
