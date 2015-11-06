<?php

$host = json_decode(file_get_contents('server.json'));

#cpu
function c($max){
	$c = number_format(rand(5,$max) / 10, 1);
	return str_pad($c, 5);
};

#mem
function m($min, $max){
	$c = number_format(rand($min,$max) / 10, 1);
	return str_pad($c, 5);
};

#time
#FIXME
function t($t,$n){
	$t = (time()+$t)/100;
	$t = number_format($t,1);
	$t = substr($t, strlen($t)-$n);
	$t = str_replace('.', ':', $t);
	return str_pad($t, 5);
};

function tr($min,$max){
	$tr = rand($min,$max)/10;
	$tr = str_replace('.', ':', $tr);
	return str_pad($tr, 5);
}

switch ($host) {
	case 'Zephis':
		$output = array(
			(string)hash('sha256', microtime() + rand()),
			(string)hash('sha256', microtime() + rand()),
			(string)hash('sha256', microtime() + rand())
		);
	break;

	case 'Wintermute':
		$output = array(
			'USER     PID    CPU    MEM   COMMAND',
			'nieve    22648  '.c(10).'  '.m(5,15).'  ps'
		);
	break;

	case 'TrivialZ3r0':
		$output = array(
			'USER     PID    CPU    MEM   COMMAND',
			'root     3251   '.c(90).'  '.m(23,40).'  connect chaos@Wintermute',
			'falken   2005   '.c(1150).'  '.m(700,800).'  c0re -t Chaos',
			'root     2677   '.c(1000).'  '.m(400,500).'  c0re -t TrivialZ3r0',
			'nieve    26588  '.c(10).'  '.m(5,15).'  ps'
		);
	break;

	case 'Erebus':
		$output = array(
			'USER     PID    CPU    MEM   COMMAND',
			'root     3251   '.c(90).'  '.m(23,40).'  connect falken@TrivialZ3r0',
			'root     2677   '.c(1000).'  '.m(400,500).'  c0re -t Erebus',
			'nieve    84687  '.c(10).'  '.m(5,15).'  ps'
		);
	break;

	default:
		$output = array(
			'USER     PID    CPU    MEM   COMMAND',
			'root     3793   '.c(90).'  '.m(23,40).'  connect falken@Erebus',
			'root     2005   '.c(1000).'  '.m(700,800).'  c0re -t Chaos',
			'nieve    29529  '.c(10).'  '.m(5,15).'  ps'
		);
	break;
}
echo json_encode($output);

?>