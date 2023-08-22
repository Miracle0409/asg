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

