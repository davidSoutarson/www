<?php
// proger nom fontinel
require 'config.php';
require 'connect.php';

$db = connect(
  dbHost:DB_HOST,
  dbName:DB_NAME,
  dbUsername:DB_USERNAME,
  dbPassword:DB_PASSWORD,
 );

if($db instanceof mysqli){
    echo "Client info:". $db->client_info. "\n";
    echo "Client version:" .$db->client_version. "\n";
};
// proger nom fontinel
?>
