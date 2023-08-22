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

