<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
Lab 06 number
</title>
</head>
<body>
<?php 
session_start(); // start the session 
$num= $_SESSION['number']; // copy the session value to a variable $num++; // increment the value 
$num++; // increment the value  
$_SESSION["number"] = $num; // update the session variable 
 header("location:number.php"); // redirect to number.php 
?>
</body> 
</html>
</body>
</html>