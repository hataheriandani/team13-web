<?php 

    $servername = "db";
    $username = "capp1";
    $password = "capp1";
    $dbname = "capp1";

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error){
        
        die("Connection failed". $conn->connect_error);

    }

?>