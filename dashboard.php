<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
require_once 'config.php';

$username = $_SESSION["username"];

// Fetch user-specific data from 'urls' table
// ...

?>

<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener - Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?></h1>
    <a href="shorten.php">Shorten URL</a><br>
    <h2>Your Shortened URLs:</h2>
    <ul>
        <!-- Display list of shortened URLs -->
        <!-- Fetch data from the 'urls' table -->
    </ul>
</body>
</html>