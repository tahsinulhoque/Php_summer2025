<?php
require_once 'connection.php';
$deleteID = $_GET['deleteID'];
$sql = "DELETE FROM Product WHERE productID = $deleteID";
if (mysqli_query($conn, $sql)) {
    header("Location: view.php");
}else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>