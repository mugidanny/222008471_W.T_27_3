<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
<center>
    <h2>The results are</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $addition = $num1 + $num2;
        $subtraction = $num1 - $num2;
        echo "<p>$firstname $lastname</p>";
        echo "<p>Addition: $num1 + $num2 = $addition</p>";
        echo "<p>Subtraction: $num1 - $num2 = $subtraction</p>";
    }
    ?>
    </center>
</body>
</html>
