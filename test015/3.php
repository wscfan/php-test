<?php

$arr = array('', 'a', 'bb', 'ccc', 'dddd', 'eeeee', 'ffffff');

$patt = '/^[a-zA-Z]{2,}$/';

foreach ($arr as $key => $value) {
  preg_match_all($patt, $value, $res);
  var_dump($res);
}