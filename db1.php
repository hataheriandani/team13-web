<?php
$servername = "webdevelopment_db_1";
$username = "orderuser";
$password = "11036";
$dbname = "orderuser";

//creating connection

$conn = new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
echo "Connected successfully";



?>
