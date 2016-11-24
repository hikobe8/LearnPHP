<?php
	$lamp = array("linux", "apache", "mysql", "php");
	
	$str = implode("+++", $lamp);
	echo $str;
	echo "<br/>";
	print_r(explode("+++", $str));
	echo "<br/>";
	print_r(explode("+++", $str, -1));
	echo "<br/>";
	print_r(explode("+++", $str, 4));
	