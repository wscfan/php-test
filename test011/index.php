<?php

function myload($class) {
  include './' . $class . '.class.php';
}

spl_autoload_register('myload');

new Mysql();