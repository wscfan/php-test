<?php

$str = 'hello WorlD, CHINA';

$patt = '/\b[a-z]+\b/i';

preg_match_all($patt, $str, $res);

var_dump($res);
