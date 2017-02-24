<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// 运算的父类提供基本的四种运算方法 + - * /
class Operation {
	protected $first;
	protected $sec;

	public function __construct($first, $sec) {
		$this->first = $first;
		$this->sec = $sec;
	}


	protected function add ($first, $sec) {
		$ret = $first + $sec;

		return $ret;
	}


	protected function sub ($first, $sec) {
		$ret = $first - $sec;

		return $ret;
	}

	protected function multip ($first, $sec) {
		$ret = $first * $sec;

		return $ret;
	}

	protected function div ($first, $sec) {
		$ret = $first / $sec;

		return $ret;
	}

	private function _test_is_numeric ($first, $sec) {
		/*if (!is_numeric($first)) {

		}
		if (!is_numeric($sec)) {

		}*/
	}
}

class Show_ret {

}