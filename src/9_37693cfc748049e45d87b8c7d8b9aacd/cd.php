<?php

include 'fs.php';
include 'util.php';

#get user input
$dir = json_decode($_POST["dir"]);
$currentDir = json_decode($_POST["currentDir"]);

#if root return root
if ($dir == '/') {
	echo '/';
	die();
}

#is dir a relative path?
if ( !startsWith($dir, '/') ) {
	if ($currentDir != '/')	{
		$dir = $currentDir . '/' . $dir;
	}
}

#if it's a path, check if it exists and is a directory
$path_array = explode('/', $dir);
#array_shift($path_array);
$dir_ = _readDir($path_array, $fs['/']);

#if error echo
if ( !is_array($dir_) ) {
	echo $dir_;
	die();
#else return new dir
} else {
	if ( !startsWith($dir, '/') ) {
		$dir = '/' . $dir;
	}
	echo $dir;
	die();
}

?>