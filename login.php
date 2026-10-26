<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE username='$username'");

if ($result && $result->num_rows > 0) {

    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        header("Location: index.php");
        exit();

    } else {
        echo "Wrong password";
    }

} else {
    echo "User not found";
}
?>