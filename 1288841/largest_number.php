<!DOCTYPE html>
<html>
<head>
    <title>Largest Number</title>
    <style>
        body {
            background: rgb(76, 179, 197);
            font-family: Arial, sans-serif;
            text-align: center;
        }

 
    </style>
</head>
<body>
    <h2>Enter Numbers</h2>
    <form method="post">
        First Number : <input type="number" name="fistnumber" required><br><br>
        Second Number : <input type="number" name="secondnumber" required><br><br>
        Third Number : <input type="number" name="thirdnumber" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['fistnumber'];
        $num2 = $_POST['secondnumber'];
        $num3 = $_POST['thirdnumber'];

        if ($num1 >= $num2 && $num1 >= $num3) {
            $largest = $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            $largest = $num2;
        } else {
            $largest = $num3;
        }

        echo "<h3>The largest number is: $largest</h3>";
    }
    ?>
</body>
</html>
