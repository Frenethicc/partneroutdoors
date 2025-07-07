<?php
session_start();

// Cek apakah user sudah login (via signup)
if (!isset($_SESSION['user'])) {
    // Kalau belum ada session, redirect ke signup
    header("Location: signup.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Halaman Sewa</title>
  <link href="https://cdn.tailwindcss.com" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f3f4f6;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center">
  <div class="bg-white shadow-lg rounded-xl p-8 max-w-md w-full text-center">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">
      Selamat Datang, <?php echo htmlspecialchars($_SESSION['user']); ?>!
    </h1>
    <p class="text-gray-600 mb-6">Anda berhasil masuk ke halaman sewa.</p>
    <a href="logout.php" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
      Logout
    </a>
  </div>
</body>
</html>
