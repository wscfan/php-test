<?php

$str = 'hello o2o 2b9 250';

$patt = '/\b[a-zA-Z]+\b|\b\d+\b/';

preg_match_all($patt, $str, $res);

var_dump($res);
