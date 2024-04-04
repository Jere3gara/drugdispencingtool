<?php
session_start();

include "connection.php";

$login_error = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["pass1"];

    $query = "SELECT * FROM Admin_table WHERE username = '$username' AND pass1 = '$password' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: admin_homepage.php");
    } else {
        $login_error = "Invalid username or password. Please try again.";
    }
}
include 'inc/header-login.php';
?>

    <div class="login-form">
        <form method="POST">
            <h2 style="text-align: left;">Admin login</h2>
            <label for="username">Username:</label>
            <input type="text" placeholder="Enter username" id="username" name="username" required><br><br>

            <label for="pass1">Password:</label>
            <input type="password" placeholder="Enter password" id="pass1" name="pass1" required><br><br>

            <button type="submit" name="login" id="login">Login</button>
            <a href="homepage[1].php"><button type="button" class="cancel">Cancel</button></a><br>

            <?php if (!empty($login_error)) : ?>
                <p class="error-message"><?php echo $login_error; ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
