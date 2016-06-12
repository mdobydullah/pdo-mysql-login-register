<?php
session_start();

// Define database
define('dbhost', 'localhost');
define('dbuser', 'obydul');
define('dbpass', '123456');
define('dbname', 'test');

// Connecting database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
