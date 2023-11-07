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
        header('Location: ../homepageUser.php'); 
        exit;
    } else {
        echo "Invalid email/username or password";
    }
}
?>