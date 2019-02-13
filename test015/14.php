<?php

$str = 'a good unset feal unpack';

$patt = '/\b\w{2}(?<!un)\w+\b/';

preg_match_all($patt, $str, $res);
var_dump($res);
