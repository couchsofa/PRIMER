<?php

include 'fs.php';
include 'util.php';

#get user input
$file = json_decode($_POST["file"]);
$currentDir = json_decode($_POST["currentDir"]);

#is root?
if ( $file == '/' ) {
	echo json_encode('Error: ' . $file . ' is not a file!');
	die();
}

#is it an absolute path?
if ( startsWith($file, '/') ) {
	$dir_ = explode('/', $file);
	$file = array_pop($dir_);
	array_shift($dir_);
	if(empty($dir_)) {
		$currentDir = '/';
	} else {
		$currentDir = '';
		foreach ($dir_ as $value) {
			$currentDir .= '/' . $value;
		}
	}
}

#get the current dir
if ($currentDir != '/') {
	$dir_ = explode('/', $currentDir);
	#array_shift($dir_);
	$dir_ = _readDir($dir_, $fs['/']);
} else {
	$dir_ = $fs['/'];
}

#if error echo
if ( !is_array($dir_) ) {
	echo json_encode($dir_);
	die();
}

#does file exist?
if ( !array_key_exists($file, $dir_) ) {
	echo json_encode('Error: ' . $file . ' does not exist!');
	die();
}

#is file a file?
if ( is_array($dir_[$file]) ) {
	echo json_encode('Error: ' . $file . ' is not a file!');
	die();
}

#read the file with newlines
function _readFile($file) {
	$file_ = explode('\n', $file);
	return json_encode($file_);
}

#echo the file
echo json_encode($dir_[$file]);

?>