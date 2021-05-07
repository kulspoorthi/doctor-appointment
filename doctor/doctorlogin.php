<?php
session_start();

$con = mysqli_connect('localhost', 'id16507289_mukund', 'STgm!j8SO]Atif6|', 'id16507289_bookings');
if($con){
	// echo "conenction successful";
}else{
	//echo "no connection";
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
    <link rel="icon" href="../logo1.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="style3.css">
	<?php  include 'doclink.php' ?> 
</head>
<body>

<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white"> DOCTOR LOGIN PAGE </div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form action="doclogincheck.php" method="POST">
						<div class="form-group">
							<label>Email ID</label>
							<input type="text" name="user" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" class="btn btn-success" name="submit" >
				</form>
			</div>
		</div>
		</div>
		
		
		
</div>
	</div>
</header>

</body>
</html>