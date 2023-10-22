<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tacobell</h1>
    </header>
    <main>
        <div class="signup-form">
            <form action="register_proses.php" method="POST">
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" required>
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" required>
                <label for="username">Username:</label>
                <input type="text" name="username" required>
                <label for="email">Email:</label>
                <input type="text" name="email" required>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                <label for="birthdate">Birthdate:</label>
                <input type="date" name="birthdate" required>
                <label for="gender">Gender:</label>
                <select name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <button type="submit">Signup</button>
            </form>
        </div>
    </main>
</body>
</html>
