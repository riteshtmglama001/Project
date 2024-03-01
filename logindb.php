<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    mysqli_select_db($conn, "logindb");

    $Uname = $_POST["name2"];
    $Password = $_POST["Password"];
    if($Uname==""){
        echo"<script>Please enter user name</script>";
    }
     elseif($Password==""){
        echo"please enter your password";
     }
     elseif($Password>=6){
        echo"please enter password greather than 6 characters";
     }
    $sql = "SELECT * FROM login WHERE Uname='$Uname' AND Password='$Password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["Uname"] = $Uname;
        header("Location: index.php");
    } else {
        $_SESSION["login_error"] = "Invalid username or password";
        header("Location: ../project/login.php");
    }
} else {
    header("Location: login.php");
}
?>
