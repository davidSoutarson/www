<?php
session_start();
session_destroy($_SESSION['contenue_panier']);
 if ( isset($_COOKIE['panier']) AND isset($_COOKIE['totalPanier'])){
  unset($_SESSION['contenue_panier']);
  unset($_SESSION['ajout']);
  unset($_COOKIE['panier']);
  unset($_COOKIE['totalPanier']);


  setcookie('panier','',time()-10);
  setcookie('totalPanier','' ,time()-10);

  header("location:MonPanier.php");
}
 ?>
