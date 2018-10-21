<?php
require 'image.class.php';

$src = 'pic1.jpg';
$content = 'ws版权所有';
$source = 'copyright.png';
$font_url = 'wryh.ttf';
$size = 20;
$color = array(
  0 => 255,
  1 => 0,
  2 => 255,
  3 => 20
);
$local = array(
  'x' => 20,
  'y' => 150
);
$angle = 30;
$alpha = 60;
$image = new Image($src);
$image->fontMark($content, $font_url, $size, $color, $local, $angle);
$image->imageMark($source, $local, $alpha);
$image->thumb(150, 100);
$image->save('fontImgMark');
$image->show();