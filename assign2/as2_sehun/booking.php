<?php
/*
|--------------------------------------------------------------------------
| Main
|--------------------------------------------------------------------------
|
|
*/
/*
|--------------------------------------------------------------------------
|SQL CONNCTION
|--------------------------------------------------------------------------
*/
// getting user, pass, url , db from the setting.php for the connection 
require("settings.php");
$connection = @mysqli_connect($host,$user ,$pswd, $dbnm) or die("<p>database connection is not working</p>");
/*
|--------------------------------------------------------------------------
| inputs of the data
|--------------------------------------------------------------------------
|
*/
$date= $_POST['date'];
$time = $_POST['time'];
$cname = $_POST['cname'];
$phone = $_POST['phone'];
$unumber = $_POST['unumber'];
$snumber = $_POST['snumber'];
$stname = $_POST['stname'];
$sbname = $_POST['sbname'];
$dsbname = $_POST['dsbname'];
$bookingref = "no ref";
$bookingref = $bookingref + $date + $time + $unumber;
$unassigned ="unassigned";
/*
|--------------------------------------------------------------------------
| Checking the booking ref
|--------------------------------------------------------------------------
|
*/
if($bookingref!="no ref"){
//
//getting the row nums for the the booking ref
//
  $query = "SELECT * FROM ass2";
  $data = mysqli_query($connection , $query);
  $total_rows = mysqli_num_rows($data);

//editing the bookingref 
$bookingref = "BRN0000".$total_rows;
/*
|--------------------------------------------------------------------------
| Inserting the data
|--------------------------------------------------------------------------
*/
$insert_query = "INSERT INTO ass2 (cname,phone,unumber,snumber,stname,sbname,dsbname,date,time,status,bookingref) VALUES ('$cname', '$phone', '$unumber','$stname','$snumber','$sbname','$dsbname','$date','$time','$unassigned','$bookingref');";
$addData = mysqli_query($connection, $insert_query);
/*
|--------------------------------------------------------------------------
| Pringting out the status box
|--------------------------------------------------------------------------
*/
echo '<div style="border-style: solid;
height: 170px;
  width: 40%;">';
echo "<h2> Thank you for your booking</h2>";
echo "Booking reference number: $bookingref <br>";
echo "Date : $date<br>";
echo "Time : $time <br>";
echo "</div>";
echo "$cname $phone $unumber $snumber $stname $sbname $dsbname";
}
//closing connection
$connection -> close();
?>