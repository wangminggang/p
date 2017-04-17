<?php
		//获取年份
		$year = isset($_GET['y']) ? $_GET['y'] : date('Y', time());
		//获取月份
		$month = isset($_GET['m']) ? $_GET['m'] + $_GET['n'] : date('m', time());
		//判断当前的月份是否合法
		if ($month > 12) {
			$month = 1;
			$year += 1;
		}
		if ($month < 1) {
			$month = 12;
			$year -= 1;
		}
		//获取该月的天数
		$days = date('t', mktime(1, 1, 1, $month, 1, $year));
		//获取当前月份的一号是礼拜几
		$week = date('w', mktime(1, 1, 1, $month, 1, $year));	//4
		var_dump($week); 
		var_dump($days);
		echo "<table width=700 cellpadding=5 border=1 cellspacing=0 align=center>";
		echo "<caption><h2>{$year}年{$month}月</h2></caption>";
		echo "<tr><th>星期日</th><th>星期一</th><th>星期二</th><th>星期三</th><th>星期四</th><th>星期五</th><th>星期六</th><tr>";
		//循环输出天
		$d = 1;
		while ($d <= $days) {
			echo "<tr>";
			//循环出七例
			for ($i = 1; $i <= 7; $i ++) {
				//判断当前$d是否超出了该月的天数
				if ($d <= $days && ($i > $week || $d > 1)) {
					echo "<td>{$d}</td>";
					$d ++;
				} else {
					echo "<td></td>";
				}
				
			}
			echo "</tr>";
		}
		echo "<tr align=center><td colspan=7><a href='./ex.php?n=-1&m={$month}&y={$year}'>上一月</a><a href='./ex.php?n=1&m={$month}&y={$year}'>下一月</a></td></tr>";
		echo "</table>";
?>