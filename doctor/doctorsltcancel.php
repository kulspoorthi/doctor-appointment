<html>
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
                               <li class="active"><a href="cancel.php">Back</a></li>
                            <li class="active"><a href="../abc.html">Home</a></li>
                          </ul>
                        </div>
                        </nav>
						</html>
<?php


// Create connection
$conn=mysqli_connect('localhost', 'id16507289_mukund', 'STgm!j8SO]Atif6|', 'id16507289_bookings');// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$date= $_POST['date'];
$timeslot=$_POST['slot'];

$query="select name,phone from bookings where date='$date' and timeslot='$timeslot'";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			$ph=(int)$row['phone'];
			$name=$row['name'];
		 # echo $ph;
$curl = curl_init();
$msg1="Dear $name, your IN-Person appointment with Dr.Phaniraj at Mukund Orthopaedic center has been cancelled for $date. Sorry for the inconvenience, Re-Book from our website.";
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk?authorization=6z9ciVu2JSqfB0U3p17gaPmKTHyZXkYERDxbdLre54wOtGW8oNT8BWCbLxryqYa2jndFVRN714eEXtpo&sender_id=CHKSMS&message=".urlencode($msg1)."&language=english&route=p&numbers=".$ph,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  #echo "cURL Error #:" . $err;
} else {
  #echo $response;
}
			}
			
		}
else{
echo '<br><center><span style="color: black; font-size: 15px;align:center;" class="p-3 mb-2 bg-warning text-dark">No search results found !</span><br><br></center>';
}




// sql to delete a record
$sql = "delete from bookings where date='$date' and timeslot='$timeslot'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>