<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];

    $en_pass = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (firstname, lastname, username, email, password, birthdate, gender)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $result = $db->prepare($sql);
    $result->execute([$firstname, $lastname, $username, $email, $en_pass, $birthdate, $gender]);

    header('location: login_user.html');
}
?>
