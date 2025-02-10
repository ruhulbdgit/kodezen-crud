<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodezen Crud</title>
</head>

<body>
    <div style="margin: 0 auto; padding:30px; width: 500px; border: 2px solid gray">
        <h2>To do App With Php</h2>
        <form action="add_category.php" method="POST">
            <div style="margin-bottom: 20px;">
                <input type="text" name="category_name" placeholder="Enter Category Name" required>
            </div>
            <div style="margin: 0 auto; color:red">
                <button type="submit">Create Category</button>
            </div>

        </form>
    </div>

</body>

</html>