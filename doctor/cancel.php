<!DOCTYPE HTML>   
<html lang="en">
<head>
    <title>Cancel Appointment</title>
    <link rel="icon" href="../logo1.png" type="image/x-icon" />
<style>


p.main {
    text-align: right;
}
.container {
  display: flex;
  align-items: left;
  justify-content: left;
}


.text {
  font-size: 20px;
  padding-left: 20px;
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
               
                <body>
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                          <ul class="nav navbar-nav">
                              <li class="active"><a href="doctor.html">Back</a></li>
                            <li class="active"><a href="../abc.html">Home</a></li>
                          </ul>
                        </div>
                        </nav>
        </head>
        <body style="background-color:white;">
        <header>
            <br>
            <a href="/" class="d-flex flex-sm-grow-1 navbar-brand"></a>
            <h2 class="text-primary text-xlg" style="font-style:Georgia;color:teal"><b>TO CANCEL APPOINTMENT</b></h2>
            <br>
            <br>
            <div class="row">
            <div class="my-3 col-12 col-md-4" style="order: 1;">
             

   <form action="drop.php" class="form-inline container " method="post"><div><span><h1><center>Pick a date:</center></h1><br></span>
                <center><span>  <input type="date" name="date" placeholder="Enter date"> <br><br></span>
      <span> <button class=" btn btn-primary my-2 my-sm-0 mr-sm-2" type="submit">Cancel</button></span>
				  </form><br><br>

   <style>
   a{
	color:white;
}
</style>
</div>  
</div>
</div>
<div class="row">
 <div class="my-3 col-12 col-md-4" style="order: 4;">
<form action="doctorsltcancel.php" class="form-inline container" method="post" ><div><span><h1>Pick a date to cancel single slot:</h1><br></span>
                <span>  <input type="date" name="date" placeholder="Enter date"></span>
				<span><h1>Pick slot:</h1><br></span>
                
                
       <select name="slot" >
  <option value="09:00AM-09:10AM">09:00AM-09:10AM</option><option value="09:10AM-09:20AM">09:10AM-09:20AM</option>
  <option value="09:20AM-09:30AM">09:20AM-09:30AM</option><option value="09:30AM-09:40AM">09:30AM-09:40AM</option>
  <option value="09:40AM-09:50AM">09:40AM-09:50AM</option><option value="09:50AM-10:00AM">09:50AM-10:00AM</option>
   <option value="10:00AM-10:10AM">10:00AM-10:10AM</option><option value="10:10AM-10:20AM">10:10AM-10:20AM</option>
  <option value="10:20AM-10:30AM">10:20AM-10:30AM</option><option value="10:30AM-10:40AM">10:30AM-10:40AM</option>
  <option value="10:40AM-10:50AM">10:40AM-10:50AM</option><option value="10:50AM-11:00AM">10:50AM-11:00AM</option>
  <option value="11:00AM-11:10AM">11:00AM-11:10AM</option><option value="11:10AM-11:20AM">11:10AM-11:20AM</option>
  <option value="11:20AM-11:30AM">11:20AM-11:30AM</option><option value="11:30AM-11:40AM">11:30AM-11:40AM</option>
  <option value="11:40AM-11:50AM">11:40AM-11:50AM</option><option value="11:50AM-12:00PM">11:50AM-12:00PM</option>
  <option value="12:00AM-12:10AM">12:00PM-12:10PM</option><option value="12:10PM-12:20PM">12:10PM-12:20PM</option>
  <option value="12:20PM-12:30PM">12:20PM-12:30PM</option><option value="12:30PM-12:40PM">12:30PM-12:40PM</option>
  <option value="12:40PM-12:50PM">12:40PM-12:50PM</option><option value="12:50PM-01:00PM">12:50PM-01:00PM</option>
  
  
  
  </select>
  <br>
  <br>
                 
        <button class=" btn btn-danger my-2 my-sm-0 mr-sm-2" type="submit"> Cancel Slot</button><br><br></div></div></div>
          
	
	</table>
    
</body>
</html>


















