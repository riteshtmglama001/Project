<?php
require('db.php');
mysqli_select_db($conn, "Hosteldb");

$sql = "CREATE TABLE IF NOT EXISTS Hostel (
    Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FullName VARCHAR(300) NOT NULL,
    ParentName VARCHAR(300) NOT NULL,
    Age INT(15),
    Gender ENUM('Male', 'Female', 'Other'),
    Address TEXT(255),
    PhoneNO INT(50))";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
