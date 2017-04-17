<?php
	$path = "../lesson19/demo01.php";
	$path = './a/b/c.txt';
	$path = './a/b/c';
	var_dump(dirname($path));

	$path = "../lesson19/demo01.php";
	$path = './a/b/c';
	var_dump(basename($path));
	
	$path = './demo.php';
	var_dump(realpath($path));

	$path = './a/b/c.txt';
	var_dump(pathinfo($path));
	var_dump(pathinfo($path, PATHINFO_DIRNAME));
	var_dump(pathinfo($path, PATHINFO_BASENAME));
	var_dump(pathinfo($path, PATHINFO_EXTENSION));
	var_dump(pathinfo($path, PATHINFO_FILENAME));

	var_dump(filetype('./a.txt'));
	var_dump(filetype('./a'));
	var_dump(filetype('./b.txt'));

	var_dump(is_file('./a'));
	var_dump(is_file('./b.txt'));
	var_dump(is_file('./c'));
	echo '<hr/>';

	var_dump(is_dir('./b.txt'));
	var_dump(is_dir('./c'));
	var_dump(is_dir('./a'));
	echo '<hr/>';
	
	var_dump(file_exists('./a'));
	var_dump(file_exists('./b.txt'));
	var_dump(file_exists('./c'));
	
	var_dump(filesize('./a'));
	var_dump(filesize('./b.txt'));
	var_dump(filesize('../lesson19-php11'));
	echo '<hr/>';

	var_dump(date('Y-m-d H:i:s', filectime('./demo.php')));
	var_dump(date('Y-m-d H:i:s', filemtime('./demo.php')));
	var_dump(date('Y-m-d H:i:s', fileatime('./demo.php')));
	var_dump(date('Y-m-d H:i:s', fileatime('./b.txt')));
	var_dump(date('Y-m-d H:i:s', fileatime('./b')));