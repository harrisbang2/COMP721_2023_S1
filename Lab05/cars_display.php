<html>
<head>
<title>
Using file Functions
</title>
</head>
<body>
<h1>Web Dev - 05 Task 1</h1>
<?php 
require_once("settings.php");
echo "getting data from : " .$host;
$connection = @mysqli_connect($host,$user ,$pswd, $dbnm) or die("<p>nope database is not working</p>");

$query = 'SELECT car_id,Make,Model,Price FROM car';
$results = mysqli_query($connection, $query);
$feedback = mysqli_fetch_row($results);

echo "<br><br> ";
echo "<table width='100%' border='1'>";
echo "<tr><th>car_id</th><th>Make</th><th>Model</th>
<th>Price</th></tr>";
while ($feedback) {
echo "<tr><td>{$feedback[0]}</td>";
echo "<td>{$feedback[1]}</td>";
echo "<td>{$feedback[2]}</td>";
echo "<td>{$feedback[3]}</td></tr>";
$feedback = mysqli_fetch_row($results);
}
echo "</table>";


mysqli_close($connection);
?>

</body> 
</html>