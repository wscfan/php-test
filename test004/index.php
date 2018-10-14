<?php

class Bhc {
	final public function xy () {
		echo 'hongniu';
	}
}

class ClassName extends Bhc {
	public function ksf () {
		echo 123;
	}

	public function xy () {
		echo '东鹏特饮';
	}
}

$cn = new ClassName();
$cn->xy();