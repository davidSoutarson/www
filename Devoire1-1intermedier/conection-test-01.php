// pour une conection sble aurienter object. il mes manque la nosion d'object

<?php
//fontion de conection avec mysquli_connet
$link = mysqli_connect ('localhost','root','','projet_villes');


if (!$link) {
  // utilisation de la constente predefinie  PHP_EDL(string) Le bon symbole de fin de ligne pour cette plateforme.
echo "<br>Error: unable to connet to MySQL || fr :Erreur: impossible de se connecter à MySQL  " . PHP_EOL;
echo "<br>Debugin errno:" . mysqli_connect_errno() . PHP_EOL;
echo "<br>Debugin error:" . mysqli_connect_error() . PHP_EOL;
  exit;// sotir de if
}

echo "<br> Success A proper conection to MySQL  was made ! The project_villes
    is ok || fr: Succès Une connexion correcte à MySQL a été établie
  ! Le project_villes est ok" .PHP_EOL ;
echo "<br> Host information || fr: info sur l'Hote protocol? : " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);

 ?>
