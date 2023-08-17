<html>
<head>
<link rel="stylesheet" href="mycss.css">
<title>
Sehun Bang Ass1 Status process
</title>
<style>
</style>
</head>
<body>

<div class ="main">
<div class="topnav">
  <a href="index.html">Home</a>
  <a href="poststatusform.php">poststatusform</a>
  <a href="searchstatusform.html">search</a>
  <a href="about.html">About</a>
</div>

<div class ="insider">
<p>Sehun Bang Ass1</p>
<p>ID: 20111406</p>
<p>email: grc5671@autuni.ac.nz</p>
<br>
<!--header-->
<h1> Status Posting Process</h1>
<div class="content"> 
<!--div class containing everything on the page except the header and footer-->
<!-- Link back to the home and post page-->
<div style="position:absolute; top: 400;">
<a href = "http://grc5671.cmslamp14.aut.ac.nz/assign1/index.html">Return to Home Page</a>
<br>
<a href = "http://grc5671.cmslamp14.aut.ac.nz/assign1/poststatusform.php">Make a new Post</a>
</div>

<?php
/* getting user, pass, url , db from the setting.php for the connection */

require("settings.php");
/*Connect to the database */
$connection = @mysqli_connect($host,$user ,$pswd, $dbnm) or die("<p>database connection is not working</p>");


/* check if the table exist*/
$command = "SELECT COUNT(*) FROM information_schema.TABLES WHERE table_schema = '$dbnm' AND table_name = 'Status'";
$result = $connection->query($command);
if ($result && $result->fetch_row()[0] == 1) {
echo "Table exists<br>";
}
else{
echo "there is no table , newtable is created<br>";
/*making the table */
$create ="create table Status(
status_Code varchar(30) NOT NULL UNIQUE,
status varchar(30) NOT NULL,
share varchar(30),
date varchar(30)NOT NULL,
Allow_Like varchar(30),
Allow_Comments varchar(30),
Allow_Share varchar(30));";
$make_table = mysqli_query($connection, $create);
}


/*getting the data from the add page*/
$statuscode=$_POST["statuscode"];
$status=$_POST["status"];
$share =$_POST["share"];
$date=$_POST["date"];
$AllowLike=$_POST["AllowLike"];
$AllowComments=$_POST["AllowComments"];
$AllowShare=$_POST["AllowShare"];

/*Confirmiung the format of the status code */
if(preg_match('/^S\d{4}$/', $statuscode )){
echo" status code Correct format!<br><br>";

/*Confirmiung statuscode unique  no duplication*/
$query = "SELECT * FROM Status WHERE status_Code = '$statuscode'";
$confimUnique= mysqli_query($connection, $query);
if (mysqli_num_rows($confimUnique) > 0) {
    echo "Error : this status Code already exists.";
echo '<p><a href="poststatusform.php">Link go Back To The Post status form!!</a></p>';
} else {
/*checking the format of the status*/
$valid_chars = '/^[a-zA-Z0-9 ,.!?]+$/';
if (empty($status) || !preg_match($valid_chars, $status)) {
    echo "The format for the  status is wrongThe status can only contain 
alphanumericals and spaces, comma, period, exclamation point and question mark 
and cannot be blank";
} else {
/*inserting into the table*/
echo "<br> Status is in right format as well , adding the data into the table....";
$insert_query = "INSERT INTO Status (status_Code, status, share,date,Allow_Like,Allow_Comments,Allow_Share) VALUES ('$statuscode', '$status', '$share','$date','$AllowLike','$AllowComments','$AllowShare');";
 $addData = mysqli_query($connection, $insert_query);
 echo "<br>Congratulations! The status has been posted!<br>New statuscode has been added.";
echo '<a href="poststatusform.php">Looking to make a  new Post?</a>';

}
}
}else{
/* status code Wrong format! message */
echo": Wrong format! The status code must start with an 'S' followed by four digits, like ¡°S0001.";
echo '<p><a href="poststatusform.php">Go Back To The Post status form and try again</a></p>';

}
$connection ->close();
?>
</div>
</div>
</div>
</body> 
</html>