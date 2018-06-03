<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
	$dbUrl = getenv('DATABASE_URL');
	$dbopts = parse_url($dbUrl);
		
	$dbHost = $dbopts["host"];
	$dbPort = $dbopts["port"];
	$dbUser = $dbopts["user"];
	$dbPassword = $dbopts["pass"];
	$dbName = ltrim($dbopts["path"],'/');
	try{
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		die("ERROR: Could not connect . " . $e->getMessage());
	}
?>	
	



