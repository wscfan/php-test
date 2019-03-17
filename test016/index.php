<?php
<<<<<<< HEAD
// header("content-type: text/html; charset=utf-8");

$con = @mysql_connect('localhost', 'root', '');

if (!$con) {
  die('数据库连接失败' . mysql_error());
} else {
  mysql_query("SET NAMES UTF8");
  mysql_select_db('test', $con);
  $result = mysql_query("SELECT * FROM user");
  while ($row = mysql_fetch_array($result)) {
    var_dump($row);
  }
}

mysql_close($con);
=======

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
>>>>>>> ee7d8dd30eb9b7d1310db140e955e0519ead2703
