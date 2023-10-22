<?php
session_start();
require_once('db.php');

if (isset($_POST['captcha'])) {
    $userCaptcha = $_POST['captcha'];
    if ($userCaptcha === $_SESSION['captcha_code']) {
        echo "CAPTCHA is correct!";
    } else {
        echo "CAPTCHA is incorrect. Please try again.";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ? OR username = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$email, $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id']; 
        header('Location: homescreen.php'); 
        exit;
    } else {
        echo "Invalid email/username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tacobell</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tacobell</h1>
    </header>
    <main>
        <div class="login-form">
            <form action="" method="POST">
                <label for="username">Username/Email:</label>
                <input type="text" name="username" required>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                <!-- <img src="captcha.php" alt="Captcha Image">
                <label for="captcha">Enter the Captcha:</label>
                <input type="text" name="captcha" required> -->
                <button type="submit">Login</button>
                <div class="links">Don't have an account?</a> 
                <a href="register_user.php">Register</a> 
            </form>
        </div>
    </main>
</body>
</html>
