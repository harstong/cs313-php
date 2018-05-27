<!DOCTYPE html>

<html>
<?php
require 'head.php';
require 'header.php';
?>
<body class="light-background">

	<div class="container"> 
		<?php
		$dbUrl = getenv('DATABASE_URL');
		$dbopts = parse_url($dbUrl);
		
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');
		
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		foreach ($db->query("SELECT fname, lname FROM users") as $row)
		{
			echo 'user: ' . $row['fname'] . ' ' . $row['lname'] . '<br>';
		};
		
		?>
	</div>
	
	<div class="container">
	</div>
 
</body>
</html>