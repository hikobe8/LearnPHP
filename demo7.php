<?php
	$one = 100;
	$two = 200;
	function add() {
		//函数中的变量会覆盖外面的全局变量
		return $one + $two;
	}
	function add2() {
		//使用global 定义为全局变量
		global $one, $two;
		return $one + $two;
	}
	
	function add3() {
		//使用GLOBALS超全局变量
		return $GLOBALS['one'] + $GLOBALS['two'];
	}
	echo "$one + $two =".add()."<br/>";
	echo "$one + $two =".add2()."<br/>";
	echo "$one + $two =".add3()."<br/>";
	