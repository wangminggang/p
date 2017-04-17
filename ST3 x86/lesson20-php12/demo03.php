<?php
	$path = '../lesson16-php8';
	//打开目录
	$handle = opendir($path);
	//使用循环依次读取目录中的内容
	echo "<table align=center width=600 border=1 cellspacing=0>";
	echo "<tr><th>文件名</th><th>文件大小</th><th>文件创建时间</th></tr>";
	while (($file = readdir($handle)) !== false) {
		//过滤掉. 和 ..
		if ($file == '.' || $file == '..') {
			continue;
		}
		//拼接完整的路径
		$fulePath = trim($path, '/').'/'.$file;
		//echo $file.'<br>';
		echo "<tr>";
		echo "<td>{$file}</td>";
		echo "<td>".filesize($fulePath)."</td>";
		echo "<td>".filectime($fulePath)."</td>";
		echo "</tr>";
	}
	echo "</table>";