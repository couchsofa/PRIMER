<?php

# Takes the type a file
# or a "string"
# and returns the hash of
# that input

include 'fs.php';
include 'util.php';

#hash functions
$hashes = ['md5', 'sha256', 'sha1', 'whirlpool', 'crc32'];

#get user input
$file = json_decode($_POST["file"]);
$currentDir = json_decode($_POST["currentDir"]);
$type = json_decode($_POST["type"]);

#does hash function exist?
if ( !in_array($type, $hashes) ) {
	echo json_encode('Error: ' . $type . ' is not supported!');
	die();
}

#is it a string? Just return the hash then
if ( startsWith($file, '"') ) {
	$file = str_replace('"', '', $file);
	$file = hash($type, $file);
	echo json_encode($file);
	die();
}

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

#hash the file
$file = hash($type, $dir_[$file]);
echo json_encode($file);

?>