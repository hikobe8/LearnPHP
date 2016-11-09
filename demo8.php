<?php
 function testRecu($n){
//  	echo $n."&nbsp&nbsp";
 	if ($n > 0) {
 		testRecu($n-1);
 	} else {
 		echo "<-->";
 	}
 	echo $n."&nbsp&nbsp";
 }
 
 testRecu(10);