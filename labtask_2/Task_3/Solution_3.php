<!DOCTYPE html>
<html>

<head>
    <title>Number Frequency Counter</title>
</head>

<body>

<form action="" method="POST">
    <label for="text">Enter Numbers (comma separated):</label>
    <input type="text" id="text" name="text" required placeholder="e.g., 1,2,3,2,1">
    <br><br>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $values = $_POST['text'];

    // Remove whitespace and split input by commas
    $numbers = explode(",", str_replace(' ', '', $values));

    $frequency = array();

    foreach ($numbers as $num) {
        if (is_numeric($num)) {
            if (isset($frequency[$num])) {
                $frequency[$num]++;
            } else {
                $frequency[$num] = 1;
            }
        }
    }

    if (!empty($frequency)) {
        echo "<h3>Number Frequencies:</h3>";
        foreach ($frequency as $number => $count) {
            echo "The number <strong>" . htmlspecialchars($number) . "</strong> appears <strong>$count</strong> time(s).<br>";
        }
    } else {
        echo "<p style='color:red;'>Please enter only valid numbers separated by commas.</p>";
    }
}
?>

</body>
</html>
