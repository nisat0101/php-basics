<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>positive</title>
</head>
<body>
<?php
$numbers = array (2,5,0,-4,0,1,-3,9);
$positive = 0;
$negative = 0;
$zero = 0;

foreach ($numbers as $num) {
    if ($num > 0) {
        $positive ++;
    }
    elseif ($num < 0) {
        $negative ++;
    } else{
        $zero ++;
    }
}

echo "Positive Numbers : " . $positive . "<br>";
echo "Negative Numbers : " . $negative . "<br>";
echo "Zero Numbers : " . $zero . "<br> <br>";

?>
</body>
</html>