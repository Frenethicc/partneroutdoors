<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Cek dummy akun
    $valid_email = "bambangsugeni69@gmail.com";
    $valid_password = "12345678";

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['user'] = $email;
        echo "<script>alert('Login berhasil!'); window.location='sewa.php';</script>";
    } else {
        echo "<script>alert('Email atau password salah!'); window.location='login.php';</script>";
    }
} else {
    header("Location: login.php");
    exit();
}