<?php
require 'image.class.php';

$src = 'pic1.jpg';
$image = new Image($src);
$image->thumb(150, 100);
$image->show();