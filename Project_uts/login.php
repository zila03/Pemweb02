<?php
    $defaultUsername = "Admin";
    $defaultPassword = "12345";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $defaultUsername && $password === $defaultPassword) {
        header("Location: admin.php");
    } else {
        header("Location: login.html?error=1");
        exit;
    }
    }
?>