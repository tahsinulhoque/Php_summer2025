<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
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
    <h2>View Products</h2>
    <hr>
    
    <table>
        <tr>
            <th> Product ID </th>
            <th> Product Name </th>
            <th> Product Quantity </th>
            <th> Product Price </th>
            <th> Delete </th>
            <th> Update </th>
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
                echo "<td><button><a href='delete.php?deleteID=" . $row["productID"] . "'>Delete</a></button></td>";
                echo "<td><button><a href='update.php?updateID=" . $row["productID"] . "'>Update</a></button></td>";
                echo "</tr>";
            }}
?>

</body>
</body>
</html>