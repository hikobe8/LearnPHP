<?php
	$ss = array("12", "23");
	echo array_sum($ss)."<br/>";
	
	$rangArray = range("10", "100", 10);
	print_r($rangArray);
	echo("<br/>");
	var_dump($rangArray[0]);	
	echo("<br/>");
	$a1 = array("name"=>"PHP", "os"=>"Linux", "db"=>"orcle");
	$a2 = array("name"=>"PHP", "os"=>"Linux", "db"=>"mysql");
	$a3 = $a1 + $a2;
	$a4 = array_merge($a1, $a2);
	print_r($a3);
	echo("<br/>");
	print_r($a4);