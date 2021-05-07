<!DOCTYPE HTML>   
<html lang="en">
<head>
    <title>Book Your Slot!</title>
    <link rel="icon" href="logo1.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
td {
  border: 1px solid #ddd;
  text-align: center;
  padding: 8px;
}

table{
    border: 1px solid #ddd;
    background-color:white;
  }
th {
  border: 1px solid #ddd; 
  padding: 8px;  
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
  
</style>
<div class="container-fluid">

<br></br>
<div class="logo">
<img src="logo1.png" height="50px" width="50px" style="float:left">
          <a  style="font-size:40px; font-weight:bold;color:teal" >MUKUND ORTHOPAEDIC CENTER</a>
                </div>
                <br></br>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                </head>
                <body >
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                          <ul class="nav navbar-nav">
                            <li class="active"><a href="abc.html">Home</a></li>
                            <style>
                                a{
                                    color:white;
                                }
                            </style>
                          </ul>
                        </div>
                        </nav>
<title>Slot Booked!</title>
 </div>   
  
  
  
  
<?php
  $con = new mysqli('localhost', 'id16507289_mukund', 'STgm!j8SO]Atif6|', 'id16507289_bookings');
if(isset($_POST['submit']))
session_start();
    $con=mysqli_connect("localhost","id16507289_mukund","STgm!j8SO]Atif6|","id16507289_bookings");

    $phone=$_POST['phone'];
    #echo $phone;
    $name=$_POST['name'];
    #echo $name;
    $date=$_POST['date'];
    #echo $date;
    $query="select id,name,date,timeslot,phone from bookings where date='$date' AND name='$name'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    ?>
    <div class="row"><div class="my-6 col-12 col-md-4" style="order: 0;"><div class="text-center serviceIcon">
        </div></div>
    <div class="my-2 col-12 col-md-4" style="order: 1;"><div class="text-center serviceIcon">
<h2 class="text-center text-lg text-primary">
   
    <?php
    echo "<h3 align=\"center\"  font-family=\"Georgia, serif;\" font-color=\"Black\">&nbsp; Thank you <b>".$row["name"]."</b> for choosing Mukund Orthopaedic Center. Your slot has been booked!<br><br> Please find your slot details as follows:<br><br> <table    style=\"border-collapse: collapse;\" width=100%>
         <center> <tr>
            <th scope=\"col\"><center>ID</center></th>     
            <th scope=\"col\"><center>Name</center></th>
            <th scope=\"col\"><center>Date</center></th>
      <th scope=\"col\"><center>Timeslot</center></th>
          </tr><center>
      <tr><td>".$row["id"]."</td>"."<td>".
      $row["name"]."</td><td>".     
      $row["date"]."</td><td>".
      $row["timeslot"]."</td><tr></table>"; 
?>
</div>
</div>


      <div class="my-3 col-12 col-md-4" style="order: 2;"><div class="text-center serviceIcon"></div></div>
       <div class="my-3 col-12 col-md-4" style="order: 3;"><div class="text-center serviceIcon"></div></div>
        <div class="my-3 col-12 col-md-4" style="order: 4;"><div class="text-center serviceIcon">
        <h3>We request you to keep a note of these details.<br><br>
        Please be 10 mins prior to the time slot alloted to you.<br><br>
        Thank you for letting us serve you!</h3>
    </div>
    </div>
<?php


          $ph=(int)$phone;
      
$curl = curl_init();
$th=$row["timeslot"];
$msg="Dear '$name',your IN-Person appointment with Dr.Phaniraj at Mukund Orthopaedic Center has been booked for '$date' at '$th'.For any query reach out to us at 08392273808.";
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk?authorization=6z9ciVu2JSqfB0U3p17gaPmKTHyZXkYERDxbdLre54wOtGW8oNT8BWCbLxryqYa2jndFVRN714eEXtpo&sender_id=CHKSMS&message=".urlencode(
    $msg)."&language=english&route=p&numbers=".$ph,
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
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
}

      

    mysqli_close($con);

 ?>
  
       

        <br>
        
    </body>
    </html>
    