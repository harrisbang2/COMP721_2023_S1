<html>
<head>
<title>
iseven
</title>
</head>
<body>
<?php 
$value = 9;
$valuesecond  = 10;
$x = 2;
echo "first number number is 9 and %2 is :" ;
echo  $value  % 2 ." so it is not even <br>";
echo "second number number is 10 and %2 is :" ;
echo  $valuesecond  % 2 ." so it is even<br>";
echo  "Checking even or not with if<Br>";
if ((is_int($x))&&($x % 2 == 0)) {
  echo "x is an even integer";
} else if (is_int($x)) {
  echo "x is a odd integer";
} else if (!is_int($x)) {
  echo "$x is not a integer";
}
?>

</body>
</html>