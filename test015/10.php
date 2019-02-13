<?php

$str = '李';

$patt = '/^[\x{4100}-\x{9fa5}]$/u';
echo preg_match_all($patt, $str) ? '是' : '否';