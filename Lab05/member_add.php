<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
USing String functions
</title>
</head>
<body>
<?php

require("settings.php");
$connection = @mysqli_connect($host,$user ,$pswd, $dbnm) or die("<p>nope database is not working</p>");
$create = "create table Vip_Member(
member_id INT AUTO_INCREMENT PRIMARY KEY ,
fname varchar(30),
lname varchar(30),
gender varchar(1),
email varchar(30),
phone varchar(30)
);";
$make_table = mysqli_query($connection, $create);
$sql = "SELECT COUNT(*) as num_rows FROM table_name";
$rowresult = mysql_query($connection,$sql);
$row = mysql_fetch_array($rowresult);

$numberid = $row[0];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phone=$_POST["phone"];
echo "$fname, $lname, $gender, $email, $phone";
$insert_query = "INSERT INTO `vip_member`(fname,lname,gender,email,phone) VALUES ('$fname','$lname','$gender','$email','$phone')";
$addData = mysqli_query($connection, $insert_query);
if($fname != null){
if($conn->query($insert_query) == TRUE) {
  echo "New record created successfully";
} 
else {
  echo "Error: ";
}

}




mysqli_close($connection);
?>
</body>
</html>