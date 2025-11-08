<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include 'include/header.inc'; ?>
    <?php session_start(); ?>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="text" name="password" required><br>

        <label for="email">Email:</label>
        <input type="text" name="email" required pattern="^[A-Za-z0-9]+([._-][A-Za-z0-9]+)*@[A-Za-z0-9]+([.-][A-Za-z0-9]+)*\.[a-z]{2,}$"><br>

        <input type="hidden" name="token" value="abc123">
        <input type="submit" value="Login">
    </form>
    <button onclick="location.href='signup_page.php'">Sign Up</button>

    <?php include 'include/footer.inc'; ?>
</body>
</html>