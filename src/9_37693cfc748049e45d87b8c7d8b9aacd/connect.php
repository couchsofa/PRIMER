<?php

include 'util.php';
include 'servers.php';

#get user input
$cred = json_decode($_POST["cred"]);
$password = json_decode($_POST["password"]);

#seperate user from host
$cred_ = explode('@', $cred);

#check that the speration worked
if (count($cred_) != 2) {
	echo json_encode(['Error: segmentation fault!','']);
	die();
}

$user = $cred_[0];
$host = $cred_[1];

#check if it's only a check, not a login
if ($password == '#' ) {
	#check if host exists
	if(!array_key_exists($host, $servers)){
		echo json_encode(['Error: [' . $host . '] does not exist!','']);
		die();
	}
	#check if user exists on host
	if(!array_key_exists($user, $servers[$host])){
		echo json_encode(['Error: [' . $user . '] does not exist on [' . $host . ']!','']);
		die();
	}
	#if user:host matches return empty string
	echo json_encode(['#','']);
	die();
}

#check if host exists
if(!array_key_exists($host, $servers)){
	echo json_encode(['Error: [' . $host . '] does not exist!','']);
	die();
}
#check if user exists on host
if(!array_key_exists($user, $servers[$host])){
	echo json_encode(['Error: [' . $user . '] does not exist on [' . $host . ']!','']);
	die();
}
#check if password matches
if($password != $servers[$host][$user]){
	echo json_encode(['Error: wrong password for ' . $user . '@' . $host . '!','']);
	die();
}
#if user@host and password matches write fs of new host to fs.json
file_put_contents('server.json', json_encode($host));

#return host id
$hostID = array('Erebus' => 0,
			   'TrivialZ3r0' => 1,
			   'Wintermute' => 2,
			   'Zephis' => 3
			   );

echo json_encode([$hostID[$host],$servers[$host]['msg']]);
die();

?>