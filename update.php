<?php
    require_once('setting.php');

    session_start();
    
    if (!isset($_SESSION['user'])) {
        echo "Update failed. please login again. <a href='login_page.php'>Login here</a>.";
    }
?>

<h1>Update Email</h1><br>
<form action="update_process.php" method="post">
    <label for="email">New Email:</label>
    <input type="text" name="email" required pattern="^[A-Za-z0-9]+([._-][A-Za-z0-9]+)*@[A-Za-z0-9]+([.-][A-Za-z0-9]+)*\.[a-z]{2,}$"><br>

    <input type="submit" value="Update Email">
</form>