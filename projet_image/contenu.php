<?php
require ('class/Image.php');
$image = new Image();
$images = $image->getImages(IMAGE_DIR_PATH);
//afichage
 ?>
 <ul>
   <?php foreach ($images as $image) : ?>
     <li><img src=" <?php echo $image_dir_url. $image ?> "/> </li>
   <?php endforeach ?>
 </ul>
