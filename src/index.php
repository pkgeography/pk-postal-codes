<?php

require './db-config.php';

$dbhost = DBHOST;
$dbname = DB;
$dbuser = DBUSER;
$dbpassword = DBPASSWORD;
$pdo = null;

try {

	// build a database connection
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpassword);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

	// output error message
	echo 'Error: ' . $e->getMessage();
}

if ($pdo !== null) {

	// query parameters
	$params = array(
		// ':post_office',
		// ':postal_code',
		// ':account_office',
		// ':branch_postal_code',
		':province' => 'sindh'
	);

	// setup query
	$query = sprintf("
		SELECT 
			`id`,
			`post_office`,
			`postal_code`,
			`account_office`,
			`province`,
			`branch_postal_code` 
		FROM `%s` 
		WHERE `province` = %s
		LIMIT 0, 10
	", DBTBL, ':province');

	// prepare query
	$stmt = $pdo->prepare($query);

	// execute query
	$stmt->execute($params);

	// fetch data
	$data = $stmt->fetchAll(PDO::FETCH_OBJ);

	
}