<?php
session_start();
?>
<!DOCTYPE html>
<html>

<?php
require 'assign03head.php';
require 'assign03header.php';
?>

<body class="light-background">
	<div class="jumbotron">
		<div class="container text-center">
			<h1>Online Store</h1>      
			<p>Mission, Vision & Values</p>
		</div>
	</div>
	
	<div class="container">    
		<div class="row">
			
			<div class="col-sm-4">
			<input type="checkbox">
				<div class="panel panel-primary">
					<div class="panel-heading">BLACK FRIDAY DEAL</div>
					<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
					<div class="panel-footer">Buy 50 mobiles and get a gift card</div>
				</div>
			</input>
			</div>
			
			<div class="col-sm-4"> 
			<input type="checkbox">
				<div class="panel panel-danger">
					<div class="panel-heading">BLACK FRIDAY DEAL</div>
					<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
					<div class="panel-footer">Buy 50 mobiles and get a gift card</div>
				</div>
			</input>
			</div>
			
			<input type="checkbox">
			<div class="col-sm-4"> 
				<div class="panel panel-success">
					<div class="panel-heading">BLACK FRIDAY DEAL</div>
					<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
					<div class="panel-footer">Buy 50 mobiles and get a gift card</div>
				</div>
			</div>
			</input>
		</div>
	</div><br>
</body>
</html>