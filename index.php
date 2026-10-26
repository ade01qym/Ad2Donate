<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ad2Donate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Ad2Donate</h1>
<p>Welcome, <?php echo $_SESSION['username']; ?></p>

<h2>Credits: <span id="credits">0</span></h2>
<h2>Donation: ₹<span id="donation">0</span></h2>

<select id="cause">
    <option>Child Education</option>
    <option>Food Donation</option>
    <option>Animal Care</option>
    <option>Tree Plantation</option>
    <option>Medical Help</option>
</select>

<p id="selectedCause"></p>

<button id="watchAd">Watch Ad</button>

<a href="logout.php">Logout</a>

<script src="script.js?v=2"></script>

</body>
</html>