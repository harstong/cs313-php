<?php
session_start();
$images = array('images/162_wood_floor_cleaner.jpg','images/resolve.jpg');
$product_array = array('Wood Floor Cleaner', 'Resolve');
$price_array = array('15.99', '10.99');

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
<?php
for($i= 0; $i < count($images); $i++){
	$_SESSION["$i"] = $images[$i];

	echo '		<form method="post" action="addItems.php">';
	echo '		<div class="col-sm-4" style="width:auto">'."\n";
	echo '			<div class="panel panel-primary">'."\n";
	echo '				<div class="panel-heading">'.$product_array[$i].'</div>'."\n";
	echo '				<div class="panel-body"><img class="thumb-nail" src="'.$images[$i].'"/></div>'."\n";
	echo '				<div class="panel-footer"><input type="hidden" name="product" value="'. $product_array[$i] .'"/><input class="number_input" type="number" size="2" name="count"/><input type="submit" value="Add to Cart"/></div>'."\n";
	echo '			</div>'."\n";
	echo '		</div>'."\n";
	echo ' 		</form>';
}
?>
	</div>
</div>

<!--	<div class="container">    
		<div class="row">			
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel-heading">BLACK FRIDAY DEAL</div>
					<div class="panel-body"><img name="image" src="images/162_wood_floor_cleaner.jpg" class="img-responsive" style="width:100%" alt="Image"></div>				
					<div class="panel-footer">Buy 50 mobiles and get a gift card</div>
				</div>
			</div>
		</div>
	</div><br>-->
</body>
</html>