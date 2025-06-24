<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            color: #2c3e50;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"], input[type="number"] {
            padding: 10px;
            margin: 5px 0;
            width: 200px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
       table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: coral;
        }
        th {
            background-color: #3498db;
            color: white;
        }
    </style>
</head>
<body>

    <h2>Update Product</h2>
    <hr>
<?php
// Assume $conn is your active MySQLi connection
$updateID = $_GET['updateID']; // or from POST, depending on your logic

// Fetch product data
$sql = "SELECT name, quantity, price FROM Product WHERE productID = $updateID";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form action="" method="POST">
    Product Name:
    <input type="text" name="pname" value="<?php echo htmlspecialchars($row['name']); ?>" required><br>

    Product Quantity:
    <input type="number" name="pquantity" value="<?php echo $row['quantity']; ?>" required><br>

    Product Price:
    <input type="number" name="pprice" value="<?php echo $row['price']; ?>" required><br>

    <input type="submit" value="Submit">
</form>

<?php
$updateID = $_GET['updateID'];
if (!empty($_POST)) {
    $name = $_POST['pname'];
    $quantity = $_POST['pquantity'];
    $price = $_POST['pprice']; 
      $sql = "UPDATE `Product` 
        SET `name` = '$name', 
            `quantity` = $quantity, 
            `price` = $price 
        WHERE `productID` = $updateID";
if(mysqli_query($conn, $sql)) {
    header("Location: view.php");
} else {
    echo "<p>Error: " . mysqli_error($conn) . "</p>";
    ($conn);
}}
else {    echo "<p>Please fill out the form.</p>";
}
    ?>
</body>
</html>