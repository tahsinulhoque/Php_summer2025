<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #dddddd; text-align: left; padding: 8px; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        a { color: #0066cc; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <h1>Available Books</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>genre</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Loop through the $books array (provided by the Controller)
                foreach ($books as $book) {
                    echo '<tr>';
                    // The title is a link to view the book's details
                    echo '<td><a href="index.php?book=' . urlencode($book->title) . '">' . htmlspecialchars($book->title) . '</a></td>';
                    echo '<td>' . htmlspecialchars($book->author) . '</td>';
                    echo '<td>' . htmlspecialchars($book->description) . '</td>';
                    echo '<td>' . htmlspecialchars($book->genre) . '</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>

</body>
</html>
