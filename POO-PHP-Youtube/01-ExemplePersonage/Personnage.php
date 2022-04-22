<?php
class Personnage{

  public $vie = 80;
  public $atk = 20;
  public $nom;


  public function __construct($nom){

    $this->nom = $nom;
  }

  public function crier( ){
    echo 'MONTJOIE ! SAINT DENIS ! QUE TRÉPASSE SI JE FAIBLIS !';
  }

  public function regenerer( $vie = null) {

    if(is_null($vie)){
        $this->vie = 100;
    }else {
      $this->vie += $vie;
      //$this->vie = $this->vie +$vie;
    }

  }

  public function attaque($cible){

    $cible->vie -= $this->atk;

  }

  public function mort(){
    return $this->vie <= 0;
  }

}
?>
