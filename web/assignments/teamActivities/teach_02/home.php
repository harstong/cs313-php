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
	<form action="processForm.php" method="POST">
		<input type="text" name="name">Name</input><br>
		<input type="text" name="email">E-mail</input><br>
		<input type="radio" name="major" value="cs">Computer Science<br>
		<input type="radio" name="major" value="web">Web Design and Development<br>
		<input type="radio" name="major" value="cit">Computer Information Technology<br>
		<input type="radio" name="major" value="ce">Computer Engineering<br>
		<textarea rows="10" cols="60" name="textarea">
		This is a text area with 10 rows and 60 cols
		</textarea><br>
		<input type="submit"/>
	</form>
	
	
</body>
</html>