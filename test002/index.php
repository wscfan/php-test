<?php

class Atm {
	protected function getPwd () {
		return '123123';
	}

	public function checkPwd ($pwd) {
		return $this->getPwd() == $pwd;
	}
}

$atm = new Atm();
if($atm->checkPwd(5454)) {
	echo '密码正确';
} else {
	echo '密码错误';
}