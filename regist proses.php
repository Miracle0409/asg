<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Store user information in the 'users' table
    // ...

    header("Location: login.php");
}
?>