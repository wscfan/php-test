<?php

$fk = fsockopen('localhost', 80, $errno, $errstr, 5);
$s = array(
  'GET /php-test/test016/2.php HTTP/1.1',
  'host:localhost',
  'cookie:name=admin',
  '',
  ''
);
$str = implode("\n", $s);
fwrite($fk, $str);

while ($row = fread($fk, 32)) {
  echo $row;
}

fclose($fk);