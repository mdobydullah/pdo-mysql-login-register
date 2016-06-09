<?php
// Database Info Define
define('dbhost', 'localhost');
define('dbuser', 'obydul');
define('dbpass', '123456');
define('dbname', 'itnetbd');

// Connecting Database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	// echo $e->getMessage();
	echo 'We are working to develop our website.';
}

?>
