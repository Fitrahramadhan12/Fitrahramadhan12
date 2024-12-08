<?php
// This is a simple example. In a real application, you should:
// 1. Use a database to store user credentials
// 2. Hash the passwords
// 3. Use proper session management

$valid_username = "admin";
$valid_password = "admin123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($username === $valid_username && $password === $valid_password) {
        echo "Login sukses!";
    } else {
        echo "Login gagal. Username atau password salah!";
    }
}
?> 