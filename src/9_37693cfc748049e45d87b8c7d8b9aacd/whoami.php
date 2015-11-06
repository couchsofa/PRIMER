<?php

	$time = microtime();
	$name = '#_[{(N§I@E%V$E)]}_#';
	$output = [];

	for ($i=0; $i < 25; $i++) {
		$string = hash('sha256', $time+$i);
		$pos = (63 - strlen($name))/2;
		$length = strlen($name) - 1;

		if ($i == 9) {
			$string = substr_replace ($string, str_repeat('#', $length), $pos, $length);
		}
		if ($i == 10) {
			$string = substr_replace ($string, $name, $pos, $length);
		}
		if ($i == 11) {
			$string = substr_replace ($string, str_repeat('#', $length), $pos, $length);
		}
		array_push($output, $string);
	}

	echo json_encode($output);

?>