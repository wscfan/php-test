<?php

$arr = array('13812345678', '2341234', '123123123231', '234234324');

// $patt = '/^[0-9]{11}$/';
$patt = '/^[^56]*$/';

foreach ($arr as $key => $value) {
  preg_match_all($patt, $value, $src);
  var_dump($src);
}