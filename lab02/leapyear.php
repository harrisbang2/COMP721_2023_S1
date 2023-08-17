<html>
<head>
<title>
Is it leap year?
</title>
</head>
<body>
<?php 
include 'leapyearform.html';
function is_leapyear($year){
echo " <br>the year : ".$year;
    if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
        echo "  is a leap year";
    } 
       else {
        echo " is a not leap year";
    }
}
$yearis = $_POST['number'];
is_leapyear($yearis);
?>
</body>
</html>