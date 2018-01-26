<header>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="assign03.php">Assignment 03 Home</a>
		</div>
		<ul class="nav navbar-nav">
			<li <?php  if(basename($_SERVER['PHP_SELF']) == 'assign03.php') echo 'class="active"';?>><a href="assign03.php">Home</a></li>
			<li <?php  if(basename($_SERVER['PHP_SELF']) == 'browse.php') echo 'class="active"';?>><a href="browse.php">Browse</a></li>
			<li <?php  if(basename($_SERVER['PHP_SELF']) == 'viewCart.php') echo 'class="active"';?>><a href="viewCart.php">View Cart</a></li>
		</ul>
	</div>
</nav>
</header>