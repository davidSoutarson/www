<?php
require ('class/Image.php');
$image = new Image();
$images = $image->getImages(IMAGE_DIR_PATH);
?>
<ul>
  <?php foreach ($images as $image):?>
    <li><img src="<?php echo IMAGE_DIR_URL . image ?>"/></li>
  <?php endforeach ?>
</ul>
