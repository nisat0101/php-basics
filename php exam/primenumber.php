<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker </title>
</head>
<body>

<h2>Check if a Number is Prime</h2>

<form method="post" action="">
    Enter a number: <input type="number" name="number" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];
    $isPrime = true;

    if ($num <= 1) {
        $isPrime = false;
    } elseif ($num == 2) {
        $isPrime = true;
    } elseif ($num % 2 == 0) {
        $isPrime = false;
    } else {
        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo "<h3>$num is a Prime Number </h3>";
    } else {
        echo "<h3>$num is NOT a Prime Number </h3>";
    }
}
?>

</body>
</html>
