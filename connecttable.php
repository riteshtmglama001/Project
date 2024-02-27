<?php
require 'db.php';

$sql = "CREATE DATABASE IF NOT EXISTS Hosteldb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
?>
