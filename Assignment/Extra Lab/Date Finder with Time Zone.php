<?php
// Set your desired time zone
date_default_timezone_set('Asia/Kolkata'); // Change to 'America/New_York', 'Europe/London', etc.

// Get current day and time
$currentDay = date("l");  // Full day name (e.g., Monday, Tuesday)
$currentDateTime = date("Y-m-d H:i:s");

// Display info
echo "Current Date & Time: $currentDateTime<br>";
echo "Today is: $currentDay<br>";

// Check if it's Sunday
if ($currentDay == "Sunday") {
    echo "🎉 Happy Sunday!";
} else {
    echo "Have a great $currentDay!";
}
?>
