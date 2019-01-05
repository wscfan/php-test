<?php

function t1() {
  if (rand(1, 10) > 5) {
    throw new Exception("AAAAA", 1);
  } else {
    return t2();
  }
}

function t2() {
  if (rand(1, 10) > 5) {
    throw new Exception("BBBBB", 1);
  } else {
    return t3();
  }
}

function t3() {
  if (rand(1, 10) > 5) {
    throw new Exception("CCCCC", 1);
  } else {
    return true;
  }
}

try {
  var_dump(t1());
} catch(Exception $e) {
  echo '文件：' . $e->getFile();
  echo '<br>';
  echo '行号：' . $e->getLine();
  echo '<br>';
  echo '错误信息：' . $e->getMessage();
}