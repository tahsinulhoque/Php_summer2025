<!DOCTYPE html>
<html>

<head>
    <title>Password Validator</title>
</head>

<body>

<form action="" method="POST">
    <label for="pass">Enter Password:</label>
    <input type="password" id="pass" name="pass" required>
    <br><br>
    <button type="submit">Submit Password</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['pass'];

    function validatePassword($password)
    {
        $hasUpper = preg_match('/[A-Z]/', $password);
        $hasLower = preg_match('/[a-z]/', $password);
        $hasDigit = preg_match('/\d/', $password);
        $hasNoSpecial = !preg_match('/[\W_]/', $password);
        $isValidLength = strlen($password) >= 8 && strlen($password) <= 32;
        return $hasUpper && $hasLower && $hasDigit && $hasNoSpecial && $isValidLength;
    }

    if (validatePassword($password)) {
        echo "<p style='color: green;'> Valid Password</p>";
    } else {
        echo "<p style='color: red;'>Invalid Password. Password must:<br>
            • Be 8-32 characters long<br>
            • Contain at least one uppercase letter<br>
            • Contain at least one lowercase letter<br>
            • Contain at least one number<br>
            • Not contain special characters or symbols</p>";
    }
}
?>

</body>
</html>
