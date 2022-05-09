<?php
echo "<li> <a href= 'test/test.php'> test <a> </li>";
require('config.php');
require('class/Image.php');
require('contenu.php');
$constants = get_defined_constants(true);
print_r($constants['user']);
