<?php

$str = 'hello, when i am working, don not coming';

$patt = '/\b\w+(?!ing)\w{3}\b/';

preg_match_all($patt, $str, $res);
var_dump($res);
