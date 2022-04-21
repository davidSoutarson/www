<?php
require(config.php);
require('class/image.php');
$image = new image();
$images = $image->getImages(IMAGE_DIR_PATH);
 ?>
<h1><php echo WEB_TITLE ?><h1>
<ul>
  <?php foreach ($images as $image): ?>
  <li><img src="<?php  echo IMAGE_DIR_URL . $image ?>" />
    <form method="post" action="process_image.php">
    <p>Tire : <input type="texte" name = "tile"/> </p>
    <input type="hidden" name="fileme" value="<?php echo $image ?>"/>
    <p>Description <br> <textarea name="descr" rows="5" cols="50">
    </textarea></p>
    <p><input type="submit" name="formImageSubmit" value="validez"/>
    </p>
  </form>
  </li>
<?php endforeach ?>
</ul>
