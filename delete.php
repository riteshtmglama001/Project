<?php
    require_once "db.php";
    mysqli_select_db($conn, "hosteldb");

    $Id = $_GET["Id"];
    $query = "DELETE FROM hostel WHERE Id = '$Id'";
    if (mysqli_query($conn, $query)) {
        header("location: index.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>