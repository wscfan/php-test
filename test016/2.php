<?php

if ($_COOKIE['name'] == 'admin') {
  echo '已成功登录';
} else {
  echo '登录失败';
}