<?php
class Personnage{

  private $vie = 80;
  private $atk = 20;
  private $nom;

//methode
  public function __construct($nom){

    $this->nom = $nom;
  }
//creation de geteur pour enpechant lateration des variable
  public function getNom(){
    return $this->nom;
  }

  public function getVie(){
    return $this->vie;
  }

  public function getAtk(){
    return $this->atk;
  }

  public function regenerer( $vie = null) {

    if(is_null($vie)){
        $this->vie = 100;
    }else {
      $this->vie += $vie;
      //$this->vie = $this->vie +$vie;
    }

  }

  //cette fontion nes utile que dans la class donc private

  private function __empeche_vie_negative(){

    if($this->vie < 0) {
      $this->vie = 0 ;
    }

  }

  public function attaque($cible){

    //$cible->vie = 20;

    $cible->vie -= $this->atk;

    $cible->__empeche_vie_negative();

  }

  public function mort(){
    return $this->vie <= 0;
  }

}
?>
