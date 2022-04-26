<?php
/**
*clase text
*  permet d'ajouter un 0 avant un chiffer inférieur a 10
*/
class Text{
/*
* @param int $chiffre <10 ecrie  01 a 09
*/
  public static function withtZero($chiffre){
    if ($chiffre < 10 ) {
      return '0' . $chiffre;
    }else {
      return $chiffre;
    }
  }

}

?>
