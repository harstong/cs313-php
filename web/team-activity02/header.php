
<div>

	<?php
	$active_page = basename($_SERVER['PHP_SELF'], ".php");
	?>
	<a <?php if($active_page == "about-us") {echo 'class="active"';}?> href="about-us.php"> about-us </a> 
	<a <?php if($active_page == "home") {echo 'class="active"';}?>href="home.php"> home </a> 
	<a <?php if($active_page == "login") {echo 'class="active"';}?>href="login.php"> login </a> 
</div> 
	
