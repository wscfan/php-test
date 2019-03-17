<?php
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