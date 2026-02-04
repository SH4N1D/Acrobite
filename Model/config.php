<?php
$conn = new mysqli("localhost", "root", "1234", "trash");

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}

session_start();
?>
