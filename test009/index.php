<?php
define('PI', 3.14);
class Math {
  const PI = 3.14159265358;
  public function test () {
    echo Math::PI;
  }
}

$m = new Math();
$m->test();