<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["credits" => 0, "donation" => 0]);
    exit();
}

$id = $_SESSION['user_id'];

$result = $conn->query("SELECT credits, donation FROM users WHERE id=$id");

if ($result && $result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(["credits" => 0, "donation" => 0]);
}
?>