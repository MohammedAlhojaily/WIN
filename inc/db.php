<?php
$host = 'localhost';
$username = 'root'; 
$password = 'root'; 
$database = 'win';

try {
    $conn = mysqli_connect($host, $username, $password, $database);
    
    if (!$conn) {
        throw new Exception("Connection failed: " . mysqli_connect_error());
    }
    
} catch (Exception $e) {
    echo $e->getMessage();
}