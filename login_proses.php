<?php
session_start();

require_once('db_connect.php'); // Establish database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verify reCAPTCHA
    $secretKey = "YOUR_SECRET_KEY"; // Replace with your reCAPTCHA secret key
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify";
    $recaptchaData = [
        'secret' => $secretKey,
        'response' => $recaptchaResponse,
    ];
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($recaptchaData),
        ],
    ];
    $context = stream_context_create($options);
    $recaptchaResult = file_get_contents($recaptchaUrl, false, $context);
    $recaptchaJson = json_decode($recaptchaResult);
    
    if (!$recaptchaJson->success) {
        $_SESSION['error'] = "reCAPTCHA verification failed. Please try again.";
        header("Location: login.php");
        exit;
    }

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
}
?>
