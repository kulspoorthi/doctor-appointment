<?php
$mysqli = new mysqli('localhost', 'id16507289_mukund', 'STgm!j8SO]Atif6|', 'id16507289_bookings');
if(isset($_GET['date'])){
    $date = $_GET['date'];
    $stmt = $mysqli->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            $stmt->close();
        }
    }
}

   



// PHP program to pop an alert 
// message box on the screen 
  
// Display the alert box  

  
$date1 = date_default_timezone_set('Asia/Kolkata');
$hourMin = date('H:i');
//$hour=date('H','+1 hour');
$dt = date('H',strtotime('+1 hour'));

$hourrrr=$dt.':00';





// PHP program to pop an alert 
// message box on the screen 
  
// Display the alert box  

  

$duration=10;
$cleanup=0;
$start=$hourrrr ;
$end="13:00";
if(strtotime($start)<strtotime("09:00")&& $date==date('Y-m-d'))
{
    $start="09:00";
    
}

function timeslots($duration,$cleanup,$start,$end){
    $start=new DateTime($start);
    $end=new DateTime($end);
    $interval=new DateInterval("PT".$duration."M");
    $cleanupInterval=new DateInterval("PT".$cleanup."M");
    $slots=array();

    for($intStart=$start;$intStart<$end;$intStart->add($interval)->add($cleanupInterval)){
    $endPeriod=clone $intStart;
    $endPeriod->add($interval);
    if($endPeriod>$end){
    break;
    }
    $slots[]=$intStart->format("H:iA")."-".$endPeriod->format("H:iA");
    }
    return $slots;
    }
    if(date('Y-m-d') == $date){
    timeslots($duration,$cleanup,$start,$end);
    
}
else
{
    $duration=10;
$cleanup=0;
$start="09:00" ;
$end="13:00";
timeslots($duration,$cleanup,$start,$end);
}
if($date<date('Y-m-d'))
{
    $duration=10;
$cleanup=0;
$start="00:00" ;
$end="00:00";
timeslots($duration,$cleanup,$start,$end);
}


?>
<?php
    $mysqli = new mysqli('localhost', 'id16507289_mukund', 'STgm!j8SO]Atif6|', 'id16507289_bookings');
    $con = new mysqli('localhost', 'id16507289_mukund', 'STgm!j8SO]Atif6|', 'id16507289_bookings');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $timeslot = $_POST['timeslot'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot=?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $msg = "<div class='alert alert-danger'>Already Booked</div>";
        }else{
           $stmt = $mysqli->prepare("INSERT INTO bookings (name, timeslot, phone, email,  gender, age, location, date) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param('ssssssss', $name, $timeslot, $phone, $email, $gender, $age, $location , $date);
            $stmt->execute();
         $stmt->close();

            $msg = "<div class='alert alert-success'>Booking Successfull</form> 
        
  
            <form method='post' action='Confirmation.php'>
    <input type='hidden' name='phone' value='".$phone."'>
     <input type='hidden' name='date' value='".$date."'>
      <input type='hidden' name='name' value='".$name."'>
    <input type='submit' class='btn btn-success'  value='Check more details'></form></div>";
    


            
        
           

          
            $mysqli->close();





}}

}

 ?>
<!DOCTYPE HTML>   
<html lang="en">
<head>
    <title>Book Your Slot!</title>
    <link rel="icon" href="logo1.png" type="image/x-icon" />
<style>
p.big {
  line-height: 3.0;
}
p.main {
    text-align: justify;
}
.container1 {
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
</style>
<div class="container1">
</div>
<div class="logo">
    <br>
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
                    <li class="active"><a href="../abc.html">Home</a></li>
                  </ul>
                </div>
                </nav>
    <div class="container">
        <h1 class="text-center">Book for Date: <?php echo date('F d,Y', strtotime($date)); ?></h1><hr>
        <div class="row">
        
<div class="col-md-12">
   <?php echo(isset($msg))?$msg:""; ?>
</div>
<?php $timeslots = timeslots($duration, $cleanup, $start, $end); 
    foreach($timeslots as $ts){
?>
<div class="col-md-2">
    <div class="form-group">
       <?php if(in_array($ts, $bookings)){ ?>
       <button class="btn btn-danger"><?php echo $ts; ?></button>
       <?php }else{ ?>
       <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>

       <?php }  ?>
    </div>
</div>
<?php } ?>
</div>
</div>
<?php 
//echo  $date;
if(date("d-m-Y H:i")>date("d-m-Y 13:00") && $date==date("Y-m-d"))
{

    echo "<h3 align=\"center\" style=\"position:relative;top:30px\" > Sorry slots are unavailable for </div>"; echo date('F d,Y', strtotime($date));echo "<br>";
    echo('Please book your slot for '); echo date('F d,Y', strtotime('+1 day'));?>
    <button><a href="index.php">Click me</a></button>
    <?php
}


?>
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Booking for: <span id="slot"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                               <div class="form-group">
                                    <label for="">Time Slot</label>
                                    <input readonly type="text" class="form-control" id="timeslot" name="timeslot">
                                </div>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input required type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input required type="number" class="form-control" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input required type="email" class="form-control" name="email">
                                </div>
                               
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
  <select name="gender" id="genger">
    <option value="male">Male</option>
    <option value="female">Female</option></select>
                                </div>
                                <div class="form-group">
                                    <label for="">Age</label>
                                    <input required type="text" class="form-control" name="age">
                                </div>
                                <div class="form-group">
                                    <label for="">Location</label>
                                    <input required type="text" class="form-control" name="location">
                                </div>
                                <div class="form-group pull-right">
                                    <button name="submit" type="submit" class="btn btn-primary" <a href="">Submit</a></button>
                                
</div>

                            </form>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
    $(".book").click(function(){
        var timeslot = $(this).attr('data-timeslot');
    $("#slot").html(timeslot);
    $("#timeslot").val(timeslot);
    $("#myModal").modal("show");
});
</script>
    
  </body>

</html>

