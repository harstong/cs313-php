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

	<div class="container"> 
		<p> Your assignment is to create a series of pages that simulate a shopping cart for an online store. The kinds of items you can put in your cart and purchase are totally up to you. But you should have at least the following components:</p>

		<table class="table table-striped">
			<tr><th><a href="browse.php">Browse Items</a></th> 
				<th><a href="viewCart.php">View Cart</a></th> 
				<th>Checkout</th>
				<th>Confirmation Page</th>
			</tr>
			<tr><td>On the browse items page, the user sees a list of items they can add to their cart and purchase. Again, the kind of items and the formatting of this page is up to you.<br>You should provide a button or link to add an item to the cart. Doing so should store that item in some way to the session, and then keep the user on the browse page.</td>
				<td>Your browse page should contain a link to view the cart. On the view cart page, the user can see all the items that are in their cart. Provide a way to remove individual items from the cart.<br>The view cart page should have a link to return to the browse page for more shopping and a link to continue to the checkout page.</td>
				<td>The checkout page should ask the user for the different components of their address. (No credit card or other purchase information is collected, only an address.)<br>It should have the option to complete the purchase or return to the cart.</td>
				<td>After completing the purchase from the checkout page, the user is shown a confirmation page. It should display all the items they have just purchased as well as the address to which it will be shipped.</td>
			</tr>

		</table>

	
	</div>
	<div class="container">
		<p class="alert-danger">Make sure to check for malicious injection, especially from free-entry fields like the address.<br>No login functionality or databases are required for this assignment.</p>
	</div>

</body>
</html>