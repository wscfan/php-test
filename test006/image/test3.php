<?php
require 'image.class.php';

$src = 'pic1.jpg';
$source = 'copyright.png';
$local = array(
  'x' => 20,
  'y' => 30
);
$alpha = 60;
$image = new Image($src);
$image->imageMark($source, $local, $alpha);
$image->thumb(150, 100);
$image->save('imgMark');
$image->show();