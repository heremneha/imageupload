
<?php 
include('connection.php');
$sql = "CREATE TABLE TABLEDB(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP)";
if($conn->query($sql)===TRUE){
    echo "table created successfully";
}
else
    echo "error in connection" .$conn->error;
?>