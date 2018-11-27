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

var_dump(t1());