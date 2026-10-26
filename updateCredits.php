<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    echo "Not logged in";
    exit();
}

$id = $_SESSION['user_id'];

$sql = "UPDATE users 
        SET credits = credits + 1,
            donation = donation + 0.1
        WHERE id = $id";

if ($conn->query($sql)) {
    echo "updated";
} else {
    echo "error";
}
?>