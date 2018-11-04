<?php

class Single {
  public $rand;
  public static $ob;
  final protected function __construct () {
    $this->rand = mt_rand(100000, 999999999);
  }
  public static function getins () {
    if (!Single::$ob) {
      Single::$ob = new Single();
    }
    return Single::$ob;
  }
}

var_dump(Single::getins());
var_dump(Single::getins());