<?php

$str = 'good unset feal unpack';

$patten = '/(?<=\bun)\w+\b/';

preg_match_all($patten, $str, $res);
var_dump($res);
