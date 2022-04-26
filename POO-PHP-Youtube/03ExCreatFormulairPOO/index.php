<?php
require 'form.php';

$form = new Form(array(
  'username'=>'Roger',
  'password'=>''
));

echo $form->label('username');
echo $form->input('username');
echo $form->label('password');
echo $form->input('password');
echo $form->label("poin d'ameloration");
echo $form->input("poin d'ameloration");

echo $form->submit();

var_dump($form);



$form = new Form();
echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');
echo $form->input('aze');
echo $form->submit();

 ?>
