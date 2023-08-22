<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verify user credentials from the 'users' table
    // ...

    session_start();
    $_SESSION["username"] = $username;

    header("Location: dashboard.php");
}
?>
