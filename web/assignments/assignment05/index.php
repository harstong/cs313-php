<?php
$dsn = "postgres://kxuikoifxgdovo:42f41f7ac4cd79d38149a6ae07314e5c3f723db50b6ad41952f86ed28d3e5126@ec2-23-23-130-158.compute-1.amazonaws.com:5432/d3eunrpj9mi32";
$db = new PDO($dsn);
?>
<!DOCTYPE html>

<html>

<body class="light-background">

	<div class="container"> 
		<?php
		$query = "Select * from users";
		
		$result = $db->query($query);
		echo $result;
		?>
	</div>
	
	<div class="container">
	</div>

</body>
</html>