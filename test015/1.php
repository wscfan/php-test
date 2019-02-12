<?php

$str = "Hi, I am WangSong.";

$patt = '/\bHi\b/';

preg_match_all($patt, $str, $src);

var_dump($src);
