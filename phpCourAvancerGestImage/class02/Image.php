<?php
class Image{


  public function __construct(){
    // Le constucteur et vide pour le projet

  }

  /*metode retoutnant les ficher présent dans le ou
  nous avons placé nos images et que nous définissons  au moyent de la
  variable  $image_dir
  */
  public function getImages($image_dir){
    // nous ouveron le dossier $image_dir avec opendir
    //et atention le resulta a la variable $handle
    if ($handle = opendir($image_dir)){
      //
      while (false !== ($entry = readdir( $handle ))){
        /* la variable entry ne poura pas se voire afecter  les . et les ..
        */
        if( $entry != "." && $entry != ".."){
          /* nous affecton le resuta dans un array*/
          $images[] = $entry;}
        }
      }
      closedir ($handle);//nous fermons le repertoire avec closedir
      return $images; //nous retournons le tableau de données
    }
  }
?>
