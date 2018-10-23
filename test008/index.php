<?php

class Math {
  static public $name = '张三';
  static public function add ($a, $b) {
    return $a + $b;
  }
}

echo Math::add(123, 34);
echo Math::$name;
