<!DOCTYPE html>
<html>

<head>
    <title>Word Split and Reverse</title>
</head>

<body>

<form action="" method="POST">
    <label for="text">Enter a sentence:</label>
    <input type="text" id="text" name="text" required>
    <br><br>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];

    // Split the sentence into words
    $words = explode(" ", $text);

    // Display original words
    echo "<h3>Your Words:</h3>";
    foreach ($words as $word) {
        echo htmlspecialchars($word) . "<br>";
    }

    // Display reversed words
    echo "<h3>Your Reversed Words:</h3>";
    for ($i = count($words) - 1; $i >= 0; $i--) {
        echo htmlspecialchars($words[$i]) . "<br>";
    }
}
?>

</body>

</html>
