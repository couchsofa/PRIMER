var ls = function(dir, currentDir) {
	return $.ajax({
		type: 'POST',
		data: {	dir: JSON.stringify(dir),
						currentDir: JSON.stringify(currentDir)},
		dataType: 'json',
		url: "ls.php",
		async: false
	}).responseText;
}

var connect = function(cred, password) {
	return $.ajax({
		type: 'POST',
		data: {	cred: JSON.stringify(cred),
						password: JSON.stringify(password)},
		dataType: 'json',
		url: "connect.php",
		async: false
	}).responseText;
}

var cd = function(dir, currentDir) {
	return $.ajax({
		type: 'POST',
		data: {	dir: JSON.stringify(dir),
						currentDir: JSON.stringify(currentDir)},
		dataType: 'json',
		url: "cd.php",
		async: false
	}).responseText;
}

var cat = function(file, currentDir) {
	return $.ajax({
		type: 'POST',
		data: {	file: JSON.stringify(file),
						currentDir: JSON.stringify(currentDir)},
		dataType: 'json',
		url: "cat.php",
		async: false
	}).responseText;
}

var hash = function(type, file, currentDir) {
	return $.ajax({
		type: 'POST',
		data: {	file: JSON.stringify(file),
				currentDir: JSON.stringify(currentDir),
				type: JSON.stringify(type)},
		dataType: 'json',
		url: "hash.php",
		async: false
	}).responseText;
}

var encode = function(type, file, currentDir) {
	return $.ajax({
		type: 'POST',
		data: {	file: JSON.stringify(file),
				currentDir: JSON.stringify(currentDir),
				type: JSON.stringify(type)},
		dataType: 'json',
		url: "encode.php",
		async: false
	}).responseText;
}

var encrypt = function(file, currentDir, pass) {
	return $.ajax({
		type: 'POST',
		data: {	file: JSON.stringify(file),
				currentDir: JSON.stringify(currentDir),
				pass: JSON.stringify(pass)},
		dataType: 'json',
		url: "encrypt.php",
		async: false
	}).responseText;
}

var decrypt = function(file, currentDir, pass) {
	return $.ajax({
		type: 'POST',
		data: {	file: JSON.stringify(file),
				currentDir: JSON.stringify(currentDir),
				pass: JSON.stringify(pass)},
		dataType: 'json',
		url: "decrypt.php",
		async: false
	}).responseText;
}

var decode = function(type, file, currentDir) {
	return $.ajax({
		type: 'POST',
		data: {	file: JSON.stringify(file),
				currentDir: JSON.stringify(currentDir),
				type: JSON.stringify(type)},
		dataType: 'json',
		url: "decode.php",
		async: false
	}).responseText;
}

var whoami = function() {
	return $.ajax({
		type: 'POST',
		url: "whoami.php",
		async: false
	}).responseText;
}

var date = function() {
	return $.ajax({
		type: 'POST',
		url: "date.php",
		async: false
	}).responseText;
}

var ps = function() {
	return $.ajax({
		type: 'POST',
		url: "ps.php",
		async: false
	}).responseText;
}
