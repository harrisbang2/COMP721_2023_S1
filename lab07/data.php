<!--file data.php -->
<?php
require("settings.php");
/*Connect to the database */
/* getting user, pass, url , db from the setting.php for the connection */
$connection = @mysqli_connect($host,$user ,$pswd, $dbnm) or die("<p>database connection is not working</p>");
	
// get name and password passed from client
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	// sleep for 10 seconds to slow server response down
	// sleep(10);
	// write back the password concatenated to end of the name
	ECHO ($name." : ".$pwd);
$create ="create table Lab07 (
Name varchar(30) NOT NULL,
Pass varchar(30),
email varchar(250),
PRIMARY KEY (Name)
)";
$mailstring ="$name@autuni.ac.nz";
$make_table = mysqli_query($connection, $create);
ECHO "<br>getting email from the database:<br>";
//
$Checkdata_query = "Select * from Lab07 where Name = '$name';";
$CheckData = mysqli_query($connection, $Checkdata_query);

$Checkdata_query = "Select * from Lab07 where Name = '$name';";
$CheckData = mysqli_query($connection, $Checkdata_query);
if ($CheckData ->num_rows > 0) {
//output data of each row
  while($ans = $CheckData ->fetch_assoc()) {
if($ans["Pass"]!=$pwd){
echo 'wrong pass';
$message = "wrong pass";
echo "<script>alert('$message');</script>";
}
}
} else {
  echo "there is no such user";
}
//
$getdata_query = "Select * from Lab07 where Name = '$name' and Pass= '$pwd';";
$getData = mysqli_query($connection, $getdata_query);
if ($getData ->num_rows > 0) {
  // output data of each row
  while($ans = $getData->fetch_assoc()) {
    echo "email :".$ans["email"];
  }
}
$connection -> close();

?>