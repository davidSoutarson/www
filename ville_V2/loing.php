<?php
session_start();
if (isset($_SESSION['user_login']))
header('location:admin/index.php');
 ?>

<?php
//récuperation des variables
if(isset($_post['submit_form']))
{
  $user_input_login = $_post['$user_input_login']
  $user_input_password= $_post['$user_input_password']
  // verification si les variables sont vides
  if((empty($user_input_login)) OR empty($user_input_login)) // -- ? ajouter des vverification ?
  {
    $mesage = '<p class="error"> Vous dever saisir les information demendée.</p>';
  }
  else
  {
/* le logigin sesi et == a une valeur dans la base ?
    Nous prenons la requette avec clause wer portant sur logigin*/
    $resulst = $mysqli->query('SElECT user_login,user_password
    FROM user WHERE user_login="'. $user_input_login .'"');
    $row = $resulst-> fretche_array();
    if(!isset ($row ['user_login']))
    {
    // la requette ne nous retourne aucun resuta pour se logigin
    $mesage ='<p class="error"> Erreur d\'identification.<br> Vous n\'aver pas accés a cette page </p>';
    }
    else
    {
/* la requette retoune un resultat, le logigin existe dans la
base. VERIFICATIONS avec fonction crypt que le mot de passe saisi
ccorespond a celuis de la base  */
      $user_login = row['user_login']; // --varible creer a partire de la basse  dans la base
      $user_password = $row ['user_password']; // --dans la base
      if (crypt($user_input_password, $user_password) != $user_password)
      {
        $mesage ='<p class="error"> Erreur d\'identification.<br> Vous n\'aver pas accés a cette page </p>';
      }
      else
      {
/*lutilisateure et reconue.
Nous créon une variable de session '$user_login' puis redirigeons lutisisateur vers la ldap_control_paged_result
d'accueille de l'admininistration
avec la fontion heder a laquelle nous passons en argument
'loction: ademine.php */
        session_start(); //-- creation de session pour envoi ou partage de variables
        $_SESSION['$user_login'] = $user_login
        header('location:admin.php');
      }
    }
  }
}
?>
