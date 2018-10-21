<?php
require 'image.class.php';

$src = 'pic1.jpg';
$content = 'ws版权所有';
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
$image = new Image($src);
$image->fontMark($content, $font_url, $size, $color, $local, $angle);
$image->save('fontMark');
$image->show();