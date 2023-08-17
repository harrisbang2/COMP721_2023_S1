<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
USing String functions
</title>
</head>
<body>
<h1>Lab 3 - Web Dev</h1>
<?php 
include 'strform.html';
//여기까진 맞음

if(isset($_POST["name"])){
$Str = $_POST["name"];
$pattern = "/^[A-Za-z]+$/";
if(preg_match($pattern,$Str)){
echo "matches<br>";
$ans ="";
$len = strlen($Str);
echo "\n the length is :".$len;
for($i=0;$i<$len;$i++){
$letter = substr($Str,$i,1);
//correct to here
if(! is_numeric(Strpos("AEIOUaeiou",$letter))){
$ans = $ans.$letter;
}
}
echo"<br> the word with no vowels: ".$ans;
}	
else{
echo"its not in reg, please enter a string containg only letters or space";
}
//if_ends
}
else{
print_r("there is no data enter a string to the input form");
}
?>
</body>
<?php echo "<p>asdsadfasd</p>"; ?>
</html>