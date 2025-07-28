<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details: <?php echo htmlspecialchars($book->title); ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .book-details { border: 1px solid #ccc; padding: 20px; border-radius: 5px; background-color: #f9f9f9; }
        h1 { color: #333; }
        p { line-height: 1.6; }
    </style>
</head>
<body>

    <div class="book-details">
        <h1><?php echo htmlspecialchars($book->title); ?></h1>
        <p><strong>Author:</strong> <?php echo htmlspecialchars($book->author); ?></p>
        <p><strong>Description:</strong> <?php echo htmlspecialchars($book->description); ?></p>
        <p><strong>genre:</strong> <?php echo htmlspecialchars($book->genre); ?></p>
    </div>
    <br>
    <a href="index.php">Back to Book List</a>

</body>
</html>