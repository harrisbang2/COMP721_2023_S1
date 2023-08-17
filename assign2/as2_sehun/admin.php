<!--file admin.php -->
<?php
// database setting
require("settings.php");
echo "<script type='text/javascript' src='xhr.js'></script>";
echo "<script type='text/javascript' src='admin.js'></script>";
/*
|--------------------------------------------------------------------------
| functions
|--------------------------------------------------------------------------
|
|
*/
//
// this is for when the input is null and has to get the 2hour range data
//
function GettingDataInTwoHour ($connection){
$Date = date("Y-m-d"); // TODAYS DATE
$Time= date("H:i:s"); // Time rightnow
$Twohourlater = date('H:i:s',strtotime('+2 hours')); // twohours later
$query = "SELECT * FROM ass2 WHERE date ='$Date' AND time < '$Twohourlater' AND time >= '$Time';";
$seachingData= mysqli_query($connection, $query);
$feedback = mysqli_fetch_row($seachingData);
if (isset($_POST['assigning'])) {
        // Perform your desired function here
        // For example, display a message
        echo "Button was clicked!";
}

echo "<table width='100%' border='1'>";
echo "<tr>
<th>Booking Reference Number</th>
<th>Customer Name</th>
<th>Phone</th>
<th>Pickup Suburb</th>
<th>Destination Suburb</th>
<th>Pickup Date and Time</th>
<th>Status</th>
<th>Assign</th>
</tr>";
while ($feedback){
echo "<tr><td>{$feedback[11]}</td>";
echo "<td>{$feedback[1]}</td>";
echo "<td>{$feedback[2]}</td>";
echo "<td>$feedback[3] $feedback[4]</td>";
echo "<td>{$feedback[7]}</td>";
echo "<td>$feedback[8]  $feedback[9]</td>";
echo "<td id ='change'>{$feedback[10]}</td>";
echo "<td><center><input type='submit' name='assigning' value='assign' onclick='assign(change)'></td></center></tr>";
$feedback = mysqli_fetch_row($seachingData);
}
echo "<br>current date & time is :$Date $Time Two hour later is : $Twohourlater";
}
//searching by the code when the input is not null
function SearchingByCode ($bsearch,$connection){
// searching from the sql
// patern checker if the formatis correct
$format = '/^BRN000\d+$/';
if(!preg_match($format , $bsearch)){
ECHO ("format is Wrong please enter the correct format");
}
else{
ECHO ("format is correct");
$query = "SELECT * FROM ass2 WHERE bookingref= '$bsearch'";
$seachingData= mysqli_query($connection, $query);
$feedback = mysqli_fetch_row($seachingData);

echo "<table width='100%' border='1'>";
echo "<tr>
<th>Booking Reference Number</th>
<th>Customer Name</th>
<th>Phone</th>
<th>Pickup Suburb</th>
<th>Destination Suburb</th>
<th>Pickup Date and Time</th>
<th>Status</th>
<th>Assign</th>
</tr>";
while ($feedback){
$BookingRef = $feedback[11];
echo "<tr><td>{$feedback[11]}</td>";
echo "<td>{$feedback[1]}</td>";
echo "<td>{$feedback[2]}</td>";
echo "<td>$feedback[3] $feedback[4]</td>";
echo "<td>{$feedback[7]}</td>";
echo "<td>{$feedback[8]}</td>";
echo "<td id ='change'>{$feedback[10]}</td>";
echo "<td><center><input type='submit' name='assigning' value='assign' onclick='assign(change)'></td></center> </tr>";
$feedback = mysqli_fetch_row($seachingData);
}
}
ECHO ("<br>Your input :  " .$bsearch);
}
//
//
// The function is for the Button when clicked
//
//
function ChangeStatus($bsearch,$connection){
$query = "UPDATE ass2 SET status ='Assigned' WHERE bookingref= '$bsearch'";
$seachingData= mysqli_query($connection, $query);
$feedback = mysqli_fetch_row($seachingData);
}
/*
|--------------------------------------------------------------------------
| main starts here
|--------------------------------------------------------------------------
|
*/
// get input from the textfeild
	$bsearch = $_POST['bsearch'];
	// sleep for 10 seconds to slow server response down
	// sleep(10);
	// write back the password concatenated to end of the name
/*Connect to the database */
$connection = @mysqli_connect($host,$user ,$pswd, $dbnm) or die("<p>database connection is not working</p>");
if(empty($bsearch)){
/*
|--------------------------------------------------------------------------
| when the input is empty they system should call the datas that are in time in 2 hour range the curret time.
|--------------------------------------------------------------------------
|
*/
echo "empty";
GettingDataInTwoHour($connection);
}
else{
SearchingByCode ($bsearch,$connection);
}
?>