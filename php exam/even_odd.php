<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT ODD</title>
</head>
<body>
<h3> Even or Odd</h3>
<form method  = "post">
    <label for="input">Input a Number</label>
    <input type="number" name = "input" placeholder ="Input"require>
    <input type="submit" name = "submit" value = "Submit">
</form>

<?php
if (isset($_POST ["submit"])) {
    $collect = (int)$_POST['input'];

    if ($collect === 0 || $collect === 1) {
        echo $collect . " is not even or odd";
    }
    elseif ($collect % 2 == 0) {
        echo $collect . " is an even number";
    } else {
        echo $collect . " is an odd number";
    }
}
?>
</body>
</html>