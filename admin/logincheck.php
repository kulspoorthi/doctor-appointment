<?php
session_start();

$con = mysqli_connect('localhost', 'id16507289_mukund', 'STgm!j8SO]Atif6|', 'id16507289_bookings');
if($con){
	//echo "connection successful";
}else{
	//echo "no connection";
}

$db = mysqli_select_db($con,'id16507289_bookings');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  admintable where user='$username' and pass='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			//echo "login successful";
			#$_SESSION['user'] = $username;
			header('location: admin.html');
		}else{
			echo "login failed";
			header('location: adminlogin.php');
			exit;

		}
		
}


?>