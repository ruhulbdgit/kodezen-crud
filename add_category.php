<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name_value = $conn->real_escape_string($_POST['category_name']);
}
$sql = "INSERT INTO category(name) 
VALUES ('$name_value')";

if ($conn->query($sql) === true) {
    header("location: index.php");
} else {
    echo "Error " . "<br>" . $conn->error;
    exit;
}
