<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php"); // Redirect to login page if user is not logged in
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h2>Welcome to the Dashboard, <?php echo $_SESSION["username"]; ?>!</h2>
        <p>Your dashboard content goes here.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
