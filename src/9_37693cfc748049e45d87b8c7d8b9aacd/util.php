<?php

#returns directory at $path as array
function _readDir($path, $fs){
	#is path an array?
	if(!is_array($path)){ 
		return 'Error: segmentation fault!';
	}
	#filter empty values and build new array
	$path = array_values(array_filter($path));

	#if empty, no valid input was given
	if (count($path) == 0){
		return 'Error: segmentation fault!';
	}
	#does the entry exist?
	if(!array_key_exists($path[0], $fs)){
		return 'Error: [' . $path[0] . '] does not exist!';
	}
	#is it a directory?
	if(!is_array($fs[$path[0]])){ 
		return 'Error: ' . $path[0] . ' is not a directory!';
	}
	#if last in input string return the array
	if (count($path) == 1){
		return $fs[$path[0]];
	}
	#go deeper
	$path_ = array_shift($path);
	return _readDir($path, $fs[$path_]);
};

#check if string starts with string
function startsWith($haystack, $needle) {
	// search backwards starting from haystack length characters from the end
	return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
};

#displays directory with folders in []
function _showDir($dir){

	if (!is_array($dir)) {
		return 'Error: ' . $dir . ' is not a directory!';
	}

	$result = '';
	foreach ($dir as $key => $value) {
		if (is_array($value)) {
			$result .= '[' . $key . ']';
		} else {
			$result .= $key;
		}
		$result .= ' ';
	}
	return $result;
};

?>