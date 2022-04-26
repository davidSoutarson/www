<?php
/**
*clase text
*  permet d'ajouter un 0 avant un chiffer inférieur a 10
*/
class Text{

private static $sufifix = "€";

const EX_MA_CONSTANTE = " Ceci es une contante";

/*
* @param int $chiffre <10 ecrie  01 a 09
*/
public static function pubicwithtZero($chiffre){
#note self:: fait referance au non de la class Text
  return self::withtZero($chiffre);
}

/*
* @param int $chiffre <10 ecrie  01 a 09
*/
  private static function withtZero($chiffre){
    if ($chiffre < 10 ) {
      return '0' . $chiffre . self::$sufifix  . self::EX_MA_CONSTANTE;
    }else {
      return $chiffre . self::$sufifix . self::EX_MA_CONSTANTE;
    }
  }

}

?>
