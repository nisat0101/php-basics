<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
</head>
<body>
    

<form method = "post">
    <label for="input"> Input Your Score (0-100)</label>
    <input type="number" name = "input" min="0" max="100" required>
    <input type="submit" value = "Submit" name = "submit">
</form>

<?php
if (isset ($_POST["submit"])) {
    $collect = (int) $_POST["input"];
    
    if ($collect >= 90) {
        echo "Your Grade is A+ ";
    } elseif ($collect >= 80) {
        echo "Your Grade is A ";
    } elseif ($collect >= 70) {
        echo "Your Grade is B ";
    } elseif ($collect >= 60) {
        echo "Your Grade is C ";
    } else {
        echo "Fail";
    }
}
?>

</body>
</html>