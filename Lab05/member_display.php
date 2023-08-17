<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
USing String functions
</title>
</head>
<body>
<h1>Lab 5 - tast2 member_display</h1>
</body>
<?php 
require("settings.php");

echo "getting data from : " .$host;

$connection = @mysqli_connect($host,$user ,$pswd, $dbnm) or die("<p>nope database is not working</p>");
//
$query = 'SELECT * FROM vip_member';
$results = mysqli_query($connection, $query);
$feedback = mysqli_fetch_row($results);

echo "<br><br> ";
echo "<table width='100%' border='1'>";
echo "<tr>
<th>id</th>
<th>Fname</th>
<th>Lname</th>
<th>Gender</th>
<th>email</th>
<th>phone</th>
</tr>";
while ($feedback) {
echo "<tr><td>{$feedback[0]}</td>";
echo "<td>{$feedback[1]}</td>";
echo "<td>{$feedback[2]}</td>";
echo "<td>{$feedback[3]}</td>";
echo "<td>{$feedback[4]}</td>";
echo "<td>{$feedback[5]}</td></tr>";
$feedback = mysqli_fetch_row($results);
}
echo "</table>";


mysqli_close($connection);
?>
</html>