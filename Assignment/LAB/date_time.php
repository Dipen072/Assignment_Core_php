<?php
date_default_timezone_set('Asia/Kolkata'); // Set timezone (optional but recommended)

echo "<h2>Current Date and Time in Different Formats</h2>";

// Format 1: Day-Month-Year
echo "Format 1 (d-m-Y): " . date("d-m-Y") . "<br>";

// Format 2: Month/Day/Year
echo "Format 2 (m/d/Y): " . date("m/d/Y") . "<br>";

// Format 3: Year-Month-Day (Database format)
echo "Format 3 (Y-m-d): " . date("Y-m-d") . "<br>";

// Format 4: Full date with day name
echo "Format 4 (l, F j, Y): " . date("l, F j, Y") . "<br>";

// Format 5: Time in 12-hour format with AM/PM
echo "Format 5 (h:i:s A): " . date("h:i:s A") . "<br>";

// Format 6: Time in 24-hour format
echo "Format 6 (H:i:s): " . date("H:i:s") . "<br>";

// Format 7: Combined full date and time
echo "Format 7 (Y-m-d H:i:s): " . date("Y-m-d H:i:s") . "<br>";
?>
