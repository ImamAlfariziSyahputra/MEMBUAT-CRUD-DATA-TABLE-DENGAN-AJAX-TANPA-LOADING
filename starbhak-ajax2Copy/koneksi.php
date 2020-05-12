<?php 
    $db1 = new mysqli("localhost", "root", "", "db_starbhak", "3306");

    if($db1->connect_error) {
        die('Connection Failed:'.$conn->connect_error);
    }
?>