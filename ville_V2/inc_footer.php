<?php
/*
ficchier inclus : inc_footer.php
contient la fermetur de la conection a la base de donner et la fin du html
------------------------------------------------------------------------------*/
$result->free(); /* Liberation des résultats */

$mysqli->close(); /* Fermeturde la connexion */
 ?>
 <footer> <p>pied de page teste</p> </footer>
</body>
</html>
