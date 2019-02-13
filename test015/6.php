<?php

$str = 'ksda good  goooood good kss s jj dfk dk ';

$patt = '/g.+?d/';

preg_match_all($patt, $str, $res);

var_dump($res);
