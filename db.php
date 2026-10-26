<?php
$conn = new mysqli("localhost", "root", "", "ad2donate", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>