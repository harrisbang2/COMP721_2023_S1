<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
Lab 06 number
</title>
</head>
<title>Managing Session</title> 
</head> 
<body>
<?php
session_set_cookie_params(3600);
session_start(); // start the session
if (!isset($_SESSION['random'])){
$randNum = rand(10,20);
$_SESSION['random']=$randNum;
}
else{

}

$num = $_POST["number"];
?> 
<h1>Web Development guessgame - Lab06</h1>
<br>

<H2>Enter a number between 10 to 20</H2>
<form action = "guessinggame.php" method = "post">
<input type="number" name ="number" id ="number" required><br>
<Button type="submit" value="Show Results">Show Results</Button >
</form>


<p><a href='<?php echo "giveup.php?". session_id() ?>'>giveup</a></p>

<p><a href='<?php echo "startover.php?". session_id() ?>'>Startover</a></p>
<?php 
echo "<p>your number is : $num</p>";
if($_SESSION['random']==$num){
echo "<p>Correct number congratuation!</p>";
}
else{
echo "<p>Try again</p>";
}
?>
</body> 
</html>

