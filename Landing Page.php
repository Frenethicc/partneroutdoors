<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Here you can validate username and password
        // For now, we're just going to check if they are not empty
        if (!empty($username) && !empty($password)) {
            echo "Logged in successfully!";
        } else {
            echo "Please fill in both fields.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Partner Outdoor</title>
</head>
<body>
    <div class="login-form">
        <h2>Login to Partner Outdoor</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>