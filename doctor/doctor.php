<!DOCTYPE HTML>   
<html lang="en">
<head>
    <title>Doctor Appointments</title>
    <link rel="icon" href="../logo1.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
<style>
p.main {
    text-align: right;
}
.container {
  display: flex;
  align-items: left;
  justify-content: left;
}

.img {
  max-width: 100%
}

.image {
  flex-basis: 40%
}

.text {
  font-size: 20px;
  padding-left: 20px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
<div class="container">
    </div>
<br>
<div class="logo">
<img src="../logo1.png" height="50px" width="50px" style="float:left">
					<a  style="font-size:40px; font-weight:bold;color:teal" >MUKUND ORTHOPAEDIC CENTER</a>
                </div>
                <br>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                </head>
                <body>
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                          <ul class="nav navbar-nav">
                            <li class="passive"><a href="../abc.html">Home</a></li>
                            <li class="passive"><a href="doctor.html">Back</a></li>
                          </ul>
                        </div>
                        </nav>
    <div style=" style : center;"  >
	 <h3 align="center">Appointment Booking</h3>
	 <hr >
	<button onclick="window.print()">Print this page</button>


<form action="doctor.php" class="form-inline" style="float:right"method="post" >
                  <input type="date" name="date" placeholder="Enter date">
                 <button class=" btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Search</button>
				  </form>
				  <style>
				      th {
    font-size: 18px;
  }
				  </style>
	<table align="center" font-size="50px" >
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Date</th>
			
			<th scope="col">Name</th>
			<th scope="col">Phone number</th>
<th scope="col">Email</th><th scope="col">Gender</th><th scope="col">Age</th><th scope="col">Location</th><th scope="col">Timeslot</th>
		</tr>
		<?php
session_start();
		$con=mysqli_connect('localhost', 'id16507289_mukund', 'STgm!j8SO]Atif6|', 'id16507289_bookings');
if($_POST['date']){
		$date=$_POST['date'];

		$query="select * from bookings where date='$date' order by timeslot asc";
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
                        </nav>