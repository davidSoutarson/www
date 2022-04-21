<?php
// fichier de configuration
define ('WEB_DIR_NAME','projet_image');
define ('IMAGE_DIR_NAME','images');

difine ('IMAGE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME .'/'. IMAGE_DIR_NAME .'/');

difine ('IMAGE_DIR_URL', 'http://'. $_SERVER['HTTP_HOST'] . '/' .WEB_DIR_NAME .'/'. IMAGE_DIR_NAME .'/');
