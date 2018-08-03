<?php
$servername="localhost";
$username="root";
$password="";
$database="DB";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("connection failed ". $mysqli_connect_error);
}
echo "connected successfully";
$conn->close();
?>

