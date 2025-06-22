<?php
require_once 'connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pHp with DataBase</title>
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
    <!-- <?php 
    echo "<p>This is a simple PHP script.</p>";
    $greeting = "Hello, World!";
    echo "<p>$greeting</p>";
    ?> -->
    <!-- <p>Current date and time: <?php echo date('Y-m-d H:i:s'); ?></p>
    <p>PHP version: <?php echo phpversion(); ?></p>
    <p>Server software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
    <p>Document root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></p>
    <p>Request method: <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
      <h1>Welcome to My PHP Page</h1> -->
<h1>Welcome to My web Page</h1>
<hr>
<h2>Add Some products using the form below</h2>
<form action="" method="post">
    Product Name:     <input type="text" name="pname" required><br>
    Product Quantity: <input type="number" name="pquantity" required><br>
    Producrt Price:​   <input type="number" name="pprice" required><br>
    <input type="submit" value="Submit">

<?php
if (!empty($_POST)) {
    $name = $_POST['pname'];
    $quantity = $_POST['pquantity'];
    $price = $_POST['pprice']; 

$sql = "INSERT INTO Product (name, quantity, price) VALUES ('$name', '$quantity', '$price')";
if(mysqli_query($conn, $sql)) {
    echo "<p>New product added successfully.</p>";
} else {
    echo "<p>Error: " . mysqli_error($conn) . "</p>";
    ($conn);
}}
else {    echo "<p>Please fill out the form.</p>";
}
    ?>

<h2>View Products</h2>
    <hr>
    <table>
        <tr>
            <th> Product ID </th>
            <th> Product Name </th>
            <th> Product Quantity </th>
            <th> Product Price </th>
        </tr>
        <?php
        $sql = "SELECT productID, name, quantity, price FROM Product WHERE 1";
        $result = mysqli_query($conn, $sql);
        //$Result containts SQL Table
        if ($result) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["productID"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "</tr>";
            }}
?>
</table>
    <button onclick="document.location='view.php'">Edit table</button>
</body>
</html>