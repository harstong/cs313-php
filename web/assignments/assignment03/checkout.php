<?php
session_start();
$items = $_SESSION['products'];
?>

<!DOCTYPE html>
<html>
<?php 
require 'assign03head.php';
require 'assign03header.php';
?>

<body class="light-background">
<h1>Your Order Summary:</h1><br/>
<?php

echo '<div class="container container-fluid">';
foreach($items as $item=>$count){
	echo '<div class="panel panel-primary"> ' . $count[key($count)] . '     ' . key($count) . '</div><br/>';
}
echo '</div>';
?>
<button name="submit" value="submit" onclick="checkout.php">Checkout</button>
</body>

</html>

