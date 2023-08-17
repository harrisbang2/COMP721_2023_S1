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
session_unset();
$_SESSION = array();//unset all session variables
session_destroy();
header("location:number.php");
?>
</body> 
</html>
</body>
</html>