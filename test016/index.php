<?php

$fk = fsockopen('localhost', 80, $errno, $errstr, 5);
$s = array(
  'GET /php-test/test016/aa.html HTTP/1.1',
  'host:localhost',
  '',
  ''
);
$str = implode("\n", $s);
fwrite($fk, $str);

while ($row = fread($fk, 32)) {
  echo $row;
}

fclose($fk);
