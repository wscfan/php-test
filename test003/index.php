<?php

class bb {
	function aa () {
		echo 11;
	}
	function hh () {
		echo 44;
	}
}

class cc extends bb {
	function aa () {
		echo 22;
	}
}

$dd = new cc();
$dd->aa();
echo '<br>';
$dd->hh();