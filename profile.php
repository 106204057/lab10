<?php 
    session_start();

    require_once('setting.php');
    include 'include/header.inc';
    
    //check login status
    session_start();
    if (isset($_SESSION['user'])) {
        echo "Welcome, ".$_SESSION['user'];

        $conn = mysqli_connect($host, $user, $pwd, $sql_db);

    }
    else {
        header('Location: login.php');
    }

?>

<p>
    This is your profile page.
</p>
<p>
    your details are as follows:
</p>
<?php
    $username = $_SESSION['user'];
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $user_account = mysqli_fetch_assoc($result);

    echo "Username: " . $user_account['username'] . "<br>";
    echo "Email: " . $user_account['email'] . "<br>";
?>

<button onclick="location.href='update.php'">Change Email</button>
<br>

<button onclick="location.href='logout.php'">Log out</button>

<?php
    include 'include/footer.inc';
?>