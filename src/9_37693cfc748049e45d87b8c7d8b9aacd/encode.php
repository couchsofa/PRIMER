<?php

# Takes the type a file
# or a "string"
# and returns the encoded version of
# that input

include 'fs.php';
include 'util.php';

#encdings functions
$encdings = ['uu', 'gz', 'base64', 'rot13'];

#get user input
$file = json_decode($_POST["file"]);
$currentDir = json_decode($_POST["currentDir"]);
$type = json_decode($_POST["type"]);

function encode($type, $file) {
	switch ($type) {
		case 'uu':
			$output = convert_uuencode($file);
		break;

		case 'gz':
			$output = gzdeflate($file);
		break;

		case 'base64':
			$output = base64_encode($file);
		break;

		default:
			$output = str_rot13($file);
		break;
	}

	if ($output == false) {
		$output = 'Error!';
	}

	#JSON breaks on empty string O.o
	if (json_encode($output) == "") {
		$output = 'Error!';
	}

	return $output;
}

#does encoding exist?
if ( !in_array($type, $encdings) ) {
	echo json_encode('Error: ' . $type . ' is not supported!');
	die();
}

#is it a string? Just return the hash then
if ( startsWith($file, '"') ) {
	$file = str_replace('"', '', $file);
	$file = encode($type, $file);
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

#encode the file
$file = encode($type, $dir_[$file]);
echo json_encode($file);

?>