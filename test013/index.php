<?php
namespace ws;
include '2.php';

class aa {
  public function __construct () {
    echo 22;
  }
}

use \wss\aa as sss;

new sss();