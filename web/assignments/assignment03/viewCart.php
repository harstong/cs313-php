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

<?php

echo '<div class="container container-fluid">';
foreach($items as $item=>$count){
	echo '<div class="panel panel-primary"> ' . $count[key($count)] . '     ' . key($count) . '</div><br/>';
}
echo '</div>';
?>
<a href="checkout.php"><button type="submit">Checkout</button></a>
</body>

</html>



