<?php 

$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE = "medical";
$conn = mysqli_connect($SERVER, $USER, $PASSWORD,$DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
