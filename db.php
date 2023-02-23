<?php

$servername = "db";
$username = "root";
$password = "password";
$dbname = "team13";
//creating connection

$conn = new mysqli ($servername, $username, $password, $dbname);


//check the connection

if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}

?>