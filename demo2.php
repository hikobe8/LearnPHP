<?php
	$foo = "kobe";
	$bar = &$foo;
	$bar = "rose";
	echo "my name is $foo"; // my name is rose
	echo "<br/>";
	echo "my name is $bar"; // my name is rose
	echo "<br/>";
	
	//$ref = &(4 + 7); //error 
	
	unset($foo);
	
	echo("$bar"); //不影响$bar的使用
	
	