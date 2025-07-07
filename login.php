<?php 
require 'koneksi.php';

// Cek apakah form dikirim dengan POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Cek input tersedia
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Ambil data user dari database berdasarkan email
        $query_sql = "SELECT * FROM customer WHERE email = '$email'";
        $result = mysqli_query($conn, $query_sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Cek password dengan password_verify (karena di-hash saat signup)
            if (password_verify($password, $row['password'])) {
                // Login berhasil
                header("Location: beranda.html");
                exit;
            } else {
                echo "<center><h1>Password salah. <a href='login.html'>Coba lagi</a></h1></center>";
            }

        } else {
            echo "<center><h1>Email tidak ditemukan. <a href='login.html'>Coba lagi</a></h1></center>";
        }
    } else {
        echo "<center><h1>Input email dan password tidak lengkap. <a href='login.html'>Coba lagi</a></h1></center>";
    }

} else {
    echo "<center><h1>Akses langsung tidak diperbolehkan.</h1></center>";
}
?>
