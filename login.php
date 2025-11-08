<?php
    require_once('setting.php');

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $conn = mysqli_connect($host, $user, $pwd, $sql_db);
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND email = '$email'";
    $result = mysqli_query($conn, $query);
    $user_account = mysqli_fetch_assoc($result);

    if ($user_account) {
        $_SESSION['user'] = $user_account['username'];
        header('Location: profile.php');
        exit();
    } else {
        echo "Incorrect username or password.";
    }
?>