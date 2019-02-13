<?php

$str = 'Today   is a nice day  Welcome   to our family';
$patt = '/\s{1,}/';

echo preg_replace($patt, '-', $str);
