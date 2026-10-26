<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// prevent duplicate
$check = $conn->query("SELECT * FROM users WHERE username='$username'");
if ($check->num_rows > 0) {
    echo "Username already exists";
    exit();
}

$sql = "INSERT INTO users (username, password, credits, donation)
        VALUES ('$username', '$password', 0, 0)";

if ($conn->query($sql)) {

    $_SESSION['user_id'] = $conn->insert_id;
    $_SESSION['username'] = $username;

    header("Location: index.php");
    exit();

} else {
    echo "Error";
}
?>