<?php
$Name=$_POST['name'];
$dob= $_POST['DOB'];
$Phone= $_POST['number'];
$Gender= $_POST['gender'];
$Uname= $_POST['name2'];
$Password= $_POST['Pass'];
if($Name==""){
    echo"<script>alert('please enter your name')</script>";
}
else if($dob==""){
    echo"<script>alert('please enter your date of the birth')</script>";
}
else if($Phone==""){
    echo"<script>alert('please enter your Phone number')</script>";
}
else if($Uname==""){
    echo"<script>alert('please enter your User name')</script>";
}
else if($Password==""){
    echo"<script>alert('please enter passowrd')</script>";

}
require('db.php');
mysqli_select_db($conn, "logindb");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$Name=$_POST['name'];
$dob= $_POST['DOB'];
$Phone= $_POST['number'];
$Gender= $_POST['gender'];
$Uname= $_POST['name2'];
$Password= $_POST['Pass'];
$sql="INSERT INTO login(Name,dob,Phone,Gender,Uname,Password) 
VALUE('$Name','$dob' ,'$Phone' ,'$Gender','$Uname' ,'$Password')";
if($conn->query($sql) === TRUE){
    echo "New record has been insert successfully!";
    header("location:login.php");
}
else{
    echo "Error".$sql .":-". mysqli_error($conn);
}
}
$conn_close;
?>