<?php
date_default_timezone_set('europe/paris'); // declaration par defaut date php

$date = "2022-02-01";
$new_date = date('Y-m-d', strtotime($date . "+3 months +2 day"));
echo date('d/m/Y', strtotime($new_date)); //03 / 05 2022

?>
