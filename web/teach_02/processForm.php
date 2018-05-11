<!DOCTYPE html>

<html>
<head>
  <title>Team 02 activity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="assignment02/index.php">Team 02 activity</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="login.php">Login</a></li>
				<li><a href="#">Home</a></li>
				<li><a href="about_us.php">About Us</a></li>
				
			</ul>
		</div>
	</nav>

Welcome <?php echo $_POST["name"]; ?> <br>

Your e-mail is <a href=mailto:"<?php echo $_POST["email"]; ?>"> <?php echo $_POST["email"]; ?> </a> <br>

Your Major is <?php echo $_POST["major"];?> <br>

Your comments are" <?php echo $_POST["textarea"];?>" <br>

Selected Continents are:<br>
<?php 
$continents = $_POST['continents'];

for ($i = 0; $i < count($continents); $i++){
	echo $continents[$i];
	echo "<br>";
}
?>
</body>
</html>