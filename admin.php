<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
	<title>MUKUND ORTHOPAEDIC CENTER</title>
	<style >
	table{
		border: 1px solid black;
		background-color:white;
	}
	tr{
		border: 1px solid black;
	}
	th{
		border: 1px solid black;
	}
	
	
</style>
</head>
<body>


	<button class="btn btn-light " style="float:left"><a href="abc.html" style="color:">Home</a></button>
	 <div style=" style : center;"  >
	 <h3 align="center">Bookings</h3>
	 <hr >


<form action="admin.php" class="form-inline" style="float:right"method="post" >
                  <input type="date" name="date" placeholder="Enter date">
                 <button class=" btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Search</button>
				  </form>
	<table align="center" >
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Date</th>
			
			<th scope="col">Name</th>
			<th scope="col">Phone number</th>
<th scope="col">Email</th><th scope="col">Gender</th><th scope="col">Age</th><th scope="col">Location</th><th scope="col">Timeslot</th>
		</tr>
		<?php
session_start();
		$con=mysqli_connect("localhost","root","","bookingcalendar");
if($_POST['date']){
		$date=$_POST['date'];

		$query="select * from bookings where date='$date'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["id"]."</th>"."<th>".
			$row["date"]."</th><th>".
			
			$row["name"]."</th><th>".
			$row["phone"]."</th><th>".
			$row["email"]."</th><th>".
			$row["gender"]."</th><th>".
			$row["age"]."</th><th>".
			$row["location"]."</th><th>".
			$row["timeslot"]."</th></tr>";
			}
			
		}
else{
echo '<br><center><span style="color: black; font-size: 15px;align:center;" class="p-3 mb-2 bg-warning text-dark">No search results found !</span><br><br></center>';
}}
		mysqli_close($con);
		?>
	
	</table>
</body>
</html>


















