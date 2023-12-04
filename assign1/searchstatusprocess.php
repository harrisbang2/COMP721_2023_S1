<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="mycss.css">
<title>
Sehun Bang Ass1 Search Process
</title>
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
<h1>Sehun Bang Ass1</h1>
<p>ID: 20111406</p>
<p>email: grc5671@autuni.ac.nz</p>
<br>
<p>Search status form</p>
<?php
$search = $_GET["search"];
echo "your seach is  :  $search <br>";
// confirming the input is in correct format
$valid_chars = '/^[a-zA-Z0-9 ,.!?]+$/';
if (empty($search) || !preg_match($valid_chars, $search)) {
echo "<br>Confirming the data has post from the form<br> $statuscode, $status, $share , $date,allow likes :$AllowLike, allow comments : $AllowComments, allow share: $AllowShare<br>";
}

/* getting user, pass, url , db from the setting.php for the connection */
require("settings.php");

/*Connect to the database */
$connection = @mysqli_connect($host,$user ,$pswd, $dbnm) or die("<p>database connection is not working</p>");
// searching from the sql
$query = "SELECT * FROM Status WHERE status= '$search'";
$seachingData= mysqli_query($connection, $query);
$feedback = mysqli_fetch_row($seachingData);

/* check if the table exist*/
$command = "SELECT COUNT(*) FROM information_schema.TABLES WHERE table_schema = '$dbnm' AND table_name = 'Status'";
$result = $connection->query($command);
if ($result && $result->fetch_row()[0] == 1) {
echo "Table exists<br>";

// showing the results
echo "<table width='100%' border='1'>";
echo "<tr>
<th>Status_Code</th>
<th>Status</th>
<th>Share</th>
<th>Date</th>
<th>Allow Like</th>
<th>Allow Comments</th>
<th>Allow Share</th>
</tr>";
while ($feedback){
echo "<tr><td>{$feedback[0]}</td>";
echo "<td>{$feedback[1]}</td>";
echo "<td>{$feedback[2]}</td>";
echo "<td>{$feedback[3]}</td>";
echo "<td>{$feedback[4]}</td>";
echo "<td>{$feedback[5]}</td>";
echo "<td>{$feedback[6]}</td> </tr>";
$feedback = mysqli_fetch_row($seachingData);
}
echo "</table>";

}
else{
echo "There is no Table<br>
please use this link to post and create the table<br>";

echo '<p><a href="poststatusform.php">To The Post status form!!</a></p>';
}
//CLOSING CONNECTION
$connection ->close();
?>

<br>
<a href="http://grc5671.cmslamp14.aut.ac.nz/assign1/index.html">Go Back to Home</a>
<br>
<a href="http://grc5671.cmslamp14.aut.ac.nz/assign1/searchstatusform.html">Go back to Search page</a>

</div>
</div>
</body>
</html>