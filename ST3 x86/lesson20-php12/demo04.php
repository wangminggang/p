<?php
	function dirRead($path, $count = 0)
	{
		//打开目录
		$handle = opendir($path);		
		while (($file = readdir($handle)) !== false) {
			//过滤掉. 和 ..
			if ($file == '.' || $file == '..') {
				continue;
			}
			//拼接完整的路径
			$fullPath = trim($path, '/').'/'.$file;
			//echo $file.'<br>';
			echo "<tr>";
			echo "<td>".str_repeat('&nbsp;', $count * 2).'|--'.$file."</td>";
			echo "<td>".filesize($fullPath)."</td>";
			echo "<td>".filectime($fullPath)."</td>";
			echo "</tr>";
			//判断是是dir
			if (is_dir($fullPath)) {
				//递归调用自己
				dirRead($fullPath, $count + 1);
			}
		}
	}
	//定义需要遍历的目录路径
	$realpath = "../../sh59";
	//使用循环依次读取目录中的内容
	echo "<table width=800 border=0 cellspacing=0>";
	echo "<tr><th>文件名</th><th>文件大小</th><th>文件创建时间</th></tr>";
	dirRead($realpath);
	echo "</table>";