<?php require('includes/database.php'); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
    </head>
    <body>
        <?php
            if (isset($_POST['email']) && isset($_POST['password'])) {
                if (empty($_POST['email']) OR empty($_POST['password'])) {
                    $message = '<p class="error">Vous n\'avez pas indiqué vos identifiants</p>';
                } else {
                    $result = $mysqli->query('SELECT id_client, email_client, password_client FROM clients WHERE email_client = "'.$_POST['email'].'" ');
                    $row = $result->fetch_array();
                    if (!isset($row['email'])) {
                        $message = '<p class="error">Erreur d\'identifiants.<br>Vous n\'avez pas accès à cette page.</p>';
                    } else {
                        if (password_verify($_POST['password'], $row['password'])) {
                            session_start();
                            $_SESSION['userId'] = $row['id'];
                            header('location:index.php');
                        } else {
                            $message = '<p class="error">Erreur d\'identifiants.<br>Vous n\'avez pas accès à cette page.</p>';
                        }
                    }
                }
            }
        ?>
        <h1>Identification</h1>
        <?php if (isset($message)) echo $message ?>
        <form method="post" action="login.php">
            <p>Email <input type="email" name="email"></p>
            <p>Mot de passe <input type="password" name="password"></p>
            <p><input type="submit" value="valider"></p>
        </form>
    </body>
</html>
