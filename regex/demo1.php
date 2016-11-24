<?php
	$pattern = "/(\d{2})\/(\d{2})\/(\d{4})/";
	$subject = "今年春节为01/28/2017至02/04/2016";
	echo preg_replace($pattern, "\\3-\\1-\\2", $subject);
	echo preg_replace($pattern, "\${3}-\${1}-\${2}", $subject);