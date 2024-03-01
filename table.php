<?php
require('db.php');
mysqli_select_db($conn, "logindb");

$sql = "CREATE TABLE IF NOT EXISTS login (
    Name VARCHAR(300) NOT NULL,
    DOB VARCHAR(300) NOT NULL,
    Phone INT(15),
    Gender ENUM('Male', 'Female', 'Other'),
    Uname VARCHAR(300),
    Password TEXT(255))";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
