<html>
<head>
<title>
fac
</title>

</head>
<body>
<?php 
include 'mathfunction.php';
include 'factorialform.html';
echo "it iss working";
$number =$_POST['number'];
echo "<br>the factorial function!!!! :<br>";
echo  factorial($number);
?>
</body>
</html>