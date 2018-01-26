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
				<li><a href="login.php">Login</a></li>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="about_us.php">About Us</a></li>
				
			</ul>
		</div>
	</nav>
	<form action="processForm.php" method="POST">

		<input type="text" name="name">Name</input><br>
		<input type="text" name="email">E-mail</input><br>
		<?php
			$majors = array("Computer Science", "Web Design and Development", "Computer Information Technology", "Computer Engineering");
			for($i = 0; $i < count($majors); $i++){
				echo '<input type="radio" name="major" value="' . $majors[$i] . '">' . $majors[$i] . '<br>';
			}
			
		?>
		<!--<input type="radio" name="major" value="Computer Science">Computer Science<br>
		<input type="radio" name="major" value="Web Design and Development">Web Design and Development<br>
		<input type="radio" name="major" value="Computer Information Technology">Computer Information Technology<br>
		<input type="radio" name="major" value="Computer Engineering">Computer Engineering<br>-->
		<textarea rows="10" cols="60" name="textarea">
		This is a text area with 10 rows and 60 cols
		</textarea><br>
		<input type="Checkbox" name="continents[]" value="North America">North America<br>
		<input type="Checkbox" name="continents[]" value="South America">South America<br>
		<input type="Checkbox" name="continents[]" value="Europe">Europe<br>
		<input type="Checkbox" name="continents[]" value="Asia">Asia<br>
		<input type="Checkbox" name="continents[]" value="Australia">Australia<br>
		<input type="Checkbox" name="continents[]" value="Africa">Africa<br>
		<input type="Checkbox" name="continents[]" value="Antartica">Antartica<br>
		
		<input type="submit"/>
	</form>
	
	
</body>
</html>