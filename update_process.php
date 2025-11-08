<?php
    require_once('setting.php');

    session_start();
    $new_email = $_POST['email'];

    if (!isset($new_email)) {
        echo "Update failed. please try again. <a href='update.php'>Update here</a>.";
    } else {
        $username = $_SESSION['user'];

        $conn = mysqli_connect($host, $user, $pwd, $sql_db);

        $query = "UPDATE user SET email = '$new_email' WHERE username = '$username'";

        if (mysqli_query($conn, $query)) {
            $_SESSION['email'] = $new_email;
            mysqli_close($conn);
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="refresh" content="5; url=profile.php">
            <title>Success</title>
        </head>
        <body>
            <h1>Congratulations!</h1>
            <p>Your email has been updated.</p>
            <p>Redirecting to your profile page ...</a>
            <p>
            <a href="profile.php">Back to profile</a>
            </p>
        </body>
        </html>

        <?php
        exit();
    } else {
            mysqli_close($conn);
            showError404();
        } 
    }
?>