<?php
header('Content-type: text/html;charset=utf-8');

class Mysql {
	public $link;

	public function conn () {
		$cfg = array(
			'host' => 'localhost',
			'user' => 'root',
			'password' => '',
			'db' => 'test',
			'charset' => 'utf8'
		);

		$this->link = mysqli_connect($cfg['host'], $cfg['user'], $cfg['password'], $cfg['db']);

		$sql = 'set names ' . $cfg['charset'];
		mysqli_query($this->link, $sql);

	}

	public function query ($sql) {
		return mysqli_query($this->link, $sql);
	}

	public function getAll ($sql) {
		$data = array();
		$res = $this->query($sql);
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
		return $data;
	}
}

$mysql = new Mysql();

$mysql->conn();

$a = $mysql->getAll('select * from user');
var_dump($a);
