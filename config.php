<?php
$host = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "url_shortener";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>