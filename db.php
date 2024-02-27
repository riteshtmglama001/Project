<?php
$servername="localhost";
$username= "root";
$password= "";

$conn=new mysqli($servername,$username,$password);
if ($conn->connect_error){
    die("connect error".$conn-> connect_error);
}

?>