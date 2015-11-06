<?php 

$usr = $_POST["usr"]; 
$pw = md5($_POST["pw"]); 

$conn = mysql_connect("localhost", "admin", "");
mysql_select_db("test");

$query = sprintf("SELECT * FROM users WHERE usr='%s' AND pw='%s'",
    $usr,
    $pw);

$result = mysql_num_rows(mysql_query($query, $conn));

if ($result > 0) {

	header("Location: ./1_c81e728d9d4c2f636f067f89cc14862c");
	die();

} else {

	header("Location: ./index.html");
	die();
}

mysql_close($conn);

?>