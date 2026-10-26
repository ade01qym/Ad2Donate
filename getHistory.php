<?php
session_start();
include "db.php";

$id = $_SESSION['user_id'];

$result = $conn->query("SELECT cause, amount, created_at 
                        FROM donations 
                        WHERE user_id = $id 
                        ORDER BY id DESC");

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>