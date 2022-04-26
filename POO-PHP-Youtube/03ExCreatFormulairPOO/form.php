<?php
/**
*class form
*permet de génerer un formulaire rapidement et simplement
*/
class Form {
  /*
  * @var Données utilisées par le formulaire
  */
  private $data;
  /*
  * @var string Tag utiliser pour les champs
  */
  public $surround ='p';
  /*
  * @param array $data Données utilisées par le formulaire
  */
  public function __construct($data = array()){

    $this->data = $data;
  }
  /*
  * @param $html code HTML a retourner
  * @return string
  */
  private function surround($html){

    return "<{$this->surround}>{$html}</{$this->surround}>";
  }


  /*
  * @param $index string Intdex de lavaveur a récuperer
  * @return string
  */
  private function getValue($index){
    return isset($this->data[$index]) ? $this->data[$index] : null;
  }

  /*
  * @param $mane string
  * @return string
  */
  public function label($name){
    return $this->surround('<label for="'. $name .'"> ecriver vortre : '. $name .'</label>');
  }

  /*
  * @param $mane string
  * @return string
  */
  public function input($name){
    return $this->surround('<input id="'. $name .'" type="text" name="'. $name .'" value="'. $this->getValue($name) .'">');
  }

  /*
  * @return string
  */
  public function submit(){
    return $this->surround('<button type="submit">Envoyer</button>');
  }


}


?>
