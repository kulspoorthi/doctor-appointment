<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?> 
</head>
<body>

<div class="container center-div shadow">
		
		<a href="logout.php" class="btn btn-danger">  Logout</a>
</div>



</body>
</html>
