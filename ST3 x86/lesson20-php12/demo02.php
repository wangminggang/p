<?php
	$path = '../lesson19-php11';
	$handle = opendir($path);

	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	closedir($handle);
	var_dump(readdir($handle));