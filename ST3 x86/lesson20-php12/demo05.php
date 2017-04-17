<?php
	function dirSize($path)
	{
		$size = 0;
		//打开目录
		$handle = opendir($path);
		//循环读取每一个文件
		while (($file = readdir($handle)) !== false) {
			//跳过. 和 ..
			if ($file == '.' || $file == '..') {
				continue;
			}
			//拼接路径
			$fullPath = trim($path, '/').'/'.$file;
			//判断是是file类型
			if (is_file($fullPath)) {
				//将每一次的得到的文件大小，叠加起来
				$size += filesize($fullPath);
			}
			//判断是否是dir
			if (is_dir($fullPath)) {
				//将每一个目录的大小加起来
				$size += dirSize($fullPath);
			}
		}
		//返回目录的大小
		return $size;
	}
	
	$path = '../lesson16-php8';
	var_dump(dirSize($path));