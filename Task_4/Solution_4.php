<!DOCTYPE html>
<html>

<head>
    <title>Power Calculator</title>
</head>

<body>

<form action="" method="POST">
    <label for="number1">Enter Base Number:</label>
    <input type="number" id="number1" name="number1" required>
    <br><br>

    <label for="number2">Enter Exponent:</label>
    <input type="number" id="number2" name="number2" required>
    <br><br>

    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    // Function to calculate power
    function power($base, $exp) {
        $result = 1;
        for ($i = 0; $i < abs($exp); $i++) {
            $result *= $base;
        }
        // If exponent is negative, return 1/result
        return ($exp < 0) ? 1 / $result : $result;
    }

    $baseSafe = htmlspecialchars($number1);
    $expSafe = htmlspecialchars($number2);
    $result = power($number1, $number2);

    echo "<h3>Result:</h3>";
    echo "$baseSafe to the power of $expSafe is: <strong>$result</strong>";
}
?>

</body>
</html>
