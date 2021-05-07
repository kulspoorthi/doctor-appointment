<!DOCTYPE HTML>   
<html lang="en">
    <title>Cancel Appointment</title>
<head>
    <link rel="icon" href="logo1.png" type="image/x-icon" />
<style>
p.big {
  line-height: 3.0;
}
p.main {
    text-align: justify;
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

 @media only screen and (max-width: 600px) {
     p.main{
         margin-left:100px;
     }
 }
</style>
<div class="container">
</div>
<br>
<div class="logo">
<img src="logo1.png" height="50px" width="50px" style="float:left">
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
                    <li class="active"><a href="abc.html">Home</a></li>
                    <li class="passive"><a href="maincancel.php">Back</a></li>
                  </ul>
                </div>
                </nav>
            </body>
        <html>
<?php
// Create connection
$mysqli = new mysqli('localhost', 'id16507289_mukund', 'STgm!j8SO]Atif6|', 'id16507289_bookings');

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: ".$mysqli->connect_error;
    exit();
}

// sql to delete a record
$phone = $_POST['phone'];

// Using prepared statements to avoid SQL injections...
$stmt = $mysqli->prepare("DELETE FROM bookings WHERE phone = ?");
$stmt->bind_param("s", $phone); // put i if you're storing your phone number as an integer
$stmt->execute();

if($stmt->affected_rows){
    $ph=(int)$phone;

    $curl = curl_init();
    $msg="Your appointment with Dr.Phaniraj is cancelled.";
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk?authorization=6z9ciVu2JSqfB0U3p17gaPmKTHyZXkYERDxbdLre54wOtGW8oNT8BWCbLxryqYa2jndFVRN714eEXtpo&sender_id=CHKSMS&message=".urlencode($msg)."&language=english&route=p&numbers=".$ph,
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

    echo "<br><br><br><br><br><br><br><br><h2 align=\"center\" class=\"container p-3 my-3 bg-success\" >Your slot has been cancelled successfully!</h2>";
} else {
    echo "<br><br><br><br><br><br><br><br><strong><h2 class=\"container p-3 my-3 bg-info\" align=\"center\" >You do not have an appointment. Kindly verify your entered mobile number or book an appointment now! </h2></strong>".$stmt->error;
}

$stmt->close();
?>