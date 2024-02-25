<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "Data";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("connect error".$conn-> connect_error);
}
else
echo"connect successfully";
?>