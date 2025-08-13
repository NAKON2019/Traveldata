<?php
	$dsn = 'mysql:host=localhost;dbname=nakondb';
	$user = 'root';
	$password = '';

	try {
		$db = new PDO($dsn, $user, $password);
		//echo 'Connected to the DB';
	} catch(PDOException $ex) {
		echo 'Unable to Connect ' .$ex->getMessage();
	}
?>