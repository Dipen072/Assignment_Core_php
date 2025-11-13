<?php
// Set timezone
date_default_timezone_set('Asia/Kolkata');

// Current date
$today = new DateTime();

// Example: Next birthday (set your date of birth month/day)
$nextBirthday = new DateTime('2025-12-15'); // Change as needed

// If birthday already passed this year, use next year
if ($nextBirthday < $today) {
    $nextBirthday->modify('+1 year');
}

// Calculate the difference
$diff = $today->diff($nextBirthday);

echo "<h3>Time Difference</h3>";
echo "Today: " . $today->format('Y-m-d') . "<br>";
echo "Next Birthday: " . $nextBirthday->format('Y-m-d') . "<br>";
echo "Days until next birthday: " . $diff->days . " days<br>";
?>
