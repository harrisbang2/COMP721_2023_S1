<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
USing String functions
</title>
</head>
<body>
<h1>Lab 5 - tast2 member_search</h1>
<form action = "member_search.php" method = "post" >
<input type = "text" id="search" name="search">
<input type = "submit" value="Submit">
</form>
<?php
$search = $_POST["search"];
echo "what you searched is : " .$search;
$command = "Select * from vip_member where fname = '$search'";
echo "<br>command is : .$command <br><br>";
require("settings.php");

echo "getting data from : " .$host;
$connection = @mysqli_connect($host,$user ,$pswd, $dbnm) or die("<p>nope database is not working</p>");
$searcher = mysqli_query($connection, $command);
$feedback = mysqli_fetch_row($searcher);
//
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
echo "<td>{$feedback [5]}</td></tr>";
$feedback = mysqli_fetch_row($results);
}
echo "</table>";

?>
</body>
</html>