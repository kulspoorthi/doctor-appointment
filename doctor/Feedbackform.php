<!DOCTYPE html>
<html>
<head>
    <title>View Feedbacks</title>
    <link rel="icon" href="../logo1.png" type="image/x-icon" />
<meta charset="UTF-8">
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

img {
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
  font-size: 18px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


</style>
<div class="container">
</div>
<br></br>
<div class="logo">
<img src="../logo1.png" height="50px" width="50px" style="float:left">
					<a  style="font-size:40px; font-weight:bold;color:teal" >MUKUND ORTHOPAEDIC CENTER</a>
                </div>
                <br></br>
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
                            <li class="passive"><a href="../doctor/doctor.html">Back</a></li>
                            <li class="passive"><a href="../abc.html">Home</a></li>
                          </ul>
                        </div>
                        </nav>
	 <div style=" style : center;"  >
	 <h3 align="center">Feedback</h3>
	 <hr >
<table>
    
  <tr>
    <center><th>Name</th></center>
    <th>Email</th>
    <th>Phone</th>
    <th>Content</th>

  </tr>
  <?php
session_start();
		$con=mysqli_connect('localhost', 'id16507289_mukund', 'STgm!j8SO]Atif6|', 'id16507289_bookings');


		$query="select * from tblcontact ";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".
			
			
			$row["user_name"]."</th><th>".
			$row["user_email"]."</th><th>".
			$row["phone"]."</th><th>".
			$row["content"]."</th></tr>"
			;
			}
			
		}
//else{
//echo '<br><center><span style="color: black; font-size: 15px;align:center;" class="p-3 mb-2 bg-warning text-dark">No search results found !</span><br><br></center>';
//}}
		mysqli_close($con);
		?>
</table>


</body>
</html>

















