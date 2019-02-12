<?php

$str = "Hi, I am WangSong.";

$patt = '/Hi/';

preg_match_all($patt, $str, $src);

var_dump($src);
