<?php
session_start();
include 'koneksi.php'; // file koneksi ke database

// Ambil data dari form signup
$nama             = $_POST['nama'];
$email            = $_POST['email'];
$no_handphone           = $_POST['no_handphone'];
$password         = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validasi: pastikan password dan konfirmasi cocok
if ($password !== $confirm_password) {
    echo "Password dan konfirmasi password tidak cocok!";
    exit;
}

// Enkripsi password (sangat dianjurkan!)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query simpan ke database (tanpa menyimpan confirm_password)
$query_sql = "INSERT INTO customer (nama, email, no_handphone, password)
              VALUES ('$nama', '$email', '$no_handphone', '$hashed_password')";

// Eksekusi query
if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html"); // redirect ke halaman login
    exit;
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
