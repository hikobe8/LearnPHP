<?php
	function table(){
		echo("<table align='center' border='1' width='600px'>");
		echo('<caption><h1>通过函数输出表格</h1></caption>');
		for($row = 0; $row < 10; $row ++) {
			$bgcolor = $row % 2 == 0 ? "#ffffff": "#dddddd";
			echo "<tr bgcolor=".$bgcolor.">";
			for ($col = 0; $col < 10; $col ++) {
				echo "<td>".($row*10+$col)."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		
	}
	
	function table2(){
		echo("<table align='center' border='1' width='600px'>");
		echo('<caption><h1>九九乘法表</h1></caption>');
		for($row1 = 1; $row1 < 10; $row1 ++) {
			$bgcolor = "#dddddd";
			echo "<tr bgcolor=".$bgcolor.">";
			for ($col1 = 1; $col1 <= $row1; $col1 ++) {
				echo "<td>".$col1."*".$row1."=".$row1*$col1."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	table();
	table2();