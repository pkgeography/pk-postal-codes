<?php

require './db-config.php';

$dbhost = DBHOST;
$dbname = DB;
$dbuser = DBUSER;
$dbpassword = DBPASSWORD;

try {
	// build a database connection
	$db_handle = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpassword);
	var_dump($db_handle);
} catch(PDOException $e) {
	// output error message
	echo $e->getMessage();

}