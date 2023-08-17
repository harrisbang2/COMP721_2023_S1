<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
USing String functions
</title>
<?php 
include 'perfectpalindromeform.html';
function isPalindrome($str) {
$str = preg_replace("/[^A-Za-z0-9]/", '', $str);
preg_replace('/[^\p{L}\p{N}\s]/u', '', $str);
$rev_str = strrev($str);
return strtolower($str) === strtolower($rev_str);
}
$Input = $_POST["name"];
echo "<p>input is : $Input</p>";

$Input = preg_replace('/[^\p{L}\p{N}\s]/u', '', $Input );
if (isPalindrome($Input)) {
  echo "$Input is a Perfect palindrome.";
} 
else {
  echo "$Input is not a palindrome.";
}?>
</head>
<body>

</body>
</html>