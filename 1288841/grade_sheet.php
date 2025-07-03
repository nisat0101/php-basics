<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <style>
        body {
            background: rgb(76, 179, 197);
            font-family: Arial, sans-serif;
            text-align: center;
        }

 
    </style>
</head>
<body>

    <div class="form">  
        <fieldset>
            <legend>Grade Sheet</legend>
            <form method="post">
                <label for="input">Input Your Score (0-100)</label><br><br>
                <input type="number" name="input" min="0" max="100" required>
                <input type="submit" value="Submit" name="submit">
            </form>
        </fieldset>
    </div> 

    <div class="result">
        <?php
        if (isset ($_POST["submit"])) {
            $collect = (int) $_POST["input"];
            
            if ($collect >= 90) {
                echo "Outstanding";
            } elseif ($collect >= 80) {
                echo "Very Good";
            } elseif ($collect >= 70) {
                echo "Good";
            } elseif ($collect >= 60) {
                echo "Poor";
            } else {
                echo "Fail";
            }
        }
        ?>
    </div>

</body>
</html>
