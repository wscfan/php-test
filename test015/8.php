<?php

$str = '13812345687 , 12728734387';

$patt = '/(\d{3})\d{4}(\d{4})/';

$new = preg_replace($patt, '\1****\2', $str);
echo $new;