<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:doclogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<?php  include 'links.php' ?> 
</head>
<body>

<div class="container center-div shadow">
		
		<a href="logout.php" class="btn btn-danger">  Logout</a>
</div>



</body>
</html>
