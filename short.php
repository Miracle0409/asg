<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
require_once 'config.php';

$username = $_SESSION["username"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $long_url = $_POST["long_url"];
    $slug = $_POST["slug"];

    // Store the URL mapping in the 'urls' table
    // ...

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener - Shorten URL</title>
</head>
<body>
    <h1>Shorten URL</h1>
    <form action="shorten.php" method="post">
        <input type="text" name="long_url" placeholder="Long URL" required><br>
        <input type="text" name="slug" placeholder="Slug" required><br>
        <button type="submit">Shorten</button>
    </form>
</body>
</html>