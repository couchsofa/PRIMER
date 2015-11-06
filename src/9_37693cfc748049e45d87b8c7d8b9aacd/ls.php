<?php

include 'fs.php';
include 'util.php';

#get user input
$dir = json_decode($_POST["dir"]);
$currentDir = json_decode($_POST["currentDir"]);

#if root read directly
if ($dir == '/') {
	echo _showDir($fs['/']);
	die();
}

#is dir a relative path?
if ( !startsWith($dir, '/') ) {
	$dir = $currentDir . '/' . $dir;
}

#if $dir is a path, split and eliminate first, empty entry
$dir = explode('/', $dir);
$dir = _readDir($dir, $fs['/']);

if ( !is_array($dir) ) {
	echo $dir;
} else {
	echo _showDir($dir);
}


?>