<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'db_dbinfo');

	/* Attempt to connect MySQL database */
	$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	mysqli_set_charset($mysqli,"utf8");

	// Check connection
	if($mysqli === false) {
		die("ERROR: Could not connect. " .$mysqli->connect_error);
	}
?>