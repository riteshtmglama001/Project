<?php
include ('db.php');
mysqli_select_db($conn, "hosteldb");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$Id= $_POST['id'];
$FullName= $_POST['name'];
$ParentName= $_POST['name2'];
$Age= $_POST['age'];
$Gender= $_POST['gender'];
$Address= $_POST['address'];
$PhoneNO= $_POST['phone'];
$sql="INSERT INTO hostel(Id,FullName,ParentName,Age,Gender,Address,PhoneNo) 
VALUE('$Id' ,'$FullName' ,'$ParentName' ,'$Age' ,'$Gender','$Address' ,'$PhoneNO')";
if($conn->query($sql) === TRUE){
    echo "New record has been insert successfully!";
    header("location:index.php");
}
else{
    echo "Error".$sql .":-". mysqli_error($conn);
}
}
$conn_close;
?>
