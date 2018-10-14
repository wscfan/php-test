<?php

class Human {
	public $money = 3000;
	protected $che = 'BMW';
	private $mv = 'kt';
	public function t1 () {
		echo $this->money;
	}
	public function t4 () {
		echo $this->mv;
	}
}

class Stu extends Human {
	public function t2 () {
		echo $this->money;
	}
	public function t3 () {
		echo $this->che;
	}
	public function t5 () {
		echo $this->mv;
	}
}

$stu = new Stu();

echo $stu->money;

echo '<br>';

$stu->t1();

echo '<br>';

$stu->t2();

echo '<br>';

// echo $stu->che;

echo '<br>';

$stu->t3();

echo '<br>';

// $stu->mv;

echo '<br>';

$stu->t4();

echo '<br>';

// $str->t5();