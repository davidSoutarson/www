<?php
require 'form.php';
require 'text.php';

$form = new Form($_POST);

  if (isset($_POST['number'])) {
   $nomber = $_POST['number'];
 }
 
var_dump($_POST);
var_dump(Text::withtZero($nomber));


?>


<form action="#" method="post">
  <?php

  echo $form->input('username');
  echo $form->input('password');
  echo $form->input('number');
  echo $form->submit();
  ?>
</form>
