<?php
// Simulate user login status (true = logged in, false = not logged in)
$isLoggedIn = false;

if (!$isLoggedIn) {
    // Redirect user to login page
    header("Location: login.php");
    exit(); // Always use exit() after header redirect
} else {
    echo "Welcome, you are logged in!";
}
?>
