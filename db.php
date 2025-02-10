<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//when i connect successfully added my db just for check
//echo "Connected successfully"; //Note: if susccesfullu Connected then no need to show.Thats why it commented
