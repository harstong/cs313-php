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
<?php
$_SESSION["name"] = "Greg";
echo 'Session variables are set';
?>

</body>

</html>