<html>
<head>
<title>
math web
</title>
</head>
<body>
<?php 
function factorial($n){
    $result =1;
    $factor =$n;
    while($factor>1){
        $result = $result*$result;
        $factor--;
    }
    return $result;
}
?>
</body>
</html>