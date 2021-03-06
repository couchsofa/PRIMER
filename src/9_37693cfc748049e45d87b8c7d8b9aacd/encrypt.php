<?php

# Takes the type a file
# or a "string"
# and returns the encrypted version of
# that input

include 'fs.php';
include 'util.php';

#get user input
$file = json_decode($_POST["file"]);
$currentDir = json_decode($_POST["currentDir"]);
$pass = json_decode($_POST["pass"]);

function encrypt($input, $pass){
	$iv = substr(hash('sha256','6428g08uu48uuncC'), 0, 16);
	$method = 'AES-256-CBC';
	$pass = hash('sha256', $pass);
	return base64_encode(openssl_encrypt($input, $method, $pass, 0, $iv));
}

#is it a string? Just return the hash then
if ( startsWith($file, '"') ) {
	$file = str_replace('"', '', $file);
	$file = encrypt($file, $pass);
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
$file = encrypt($dir_[$file], $pass);
echo json_encode($file);

?>