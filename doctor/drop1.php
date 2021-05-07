<?php


// Create connection
$conn=mysqli_connect("localhost","id16507289_mukund","STgm!j8SO]Atif6|","id16507289_bookings");// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$date= $_POST['date'];

// sql to delete a record
//echo "$date";
$sql = "INSERT INTO blacklist VALUES ('$date')";

//STR_TO_DATE('$date','%y-%m-%d')

if (mysqli_query($conn, $sql)) {
    //echo "$date";
   echo "Slots blocked successfully";
}
 else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);



?>