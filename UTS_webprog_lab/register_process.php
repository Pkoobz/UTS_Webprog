<?php
require_once('db.php');
$username = $_POST['username']; 
$password = $_POST['password']; 
// 1 
$en_pass = password_hash($password, PASSWORD_BCRYPT);
// 2
$sql = "INSERT INTO users (username, password) 
        VALUES(?, ?)";
// 3
$result = $db->prepare($sql);
$result->execute([$username, $en_pass]);
header('location: login.php');
?>