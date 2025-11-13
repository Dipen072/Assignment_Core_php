<?php
date_default_timezone_set('Asia/Kolkata'); // Set your timezone

$currentDate = date("Y-m-d H:i:s");

echo "<h3>Custom Date Formats</h3>";
echo "Default (Y-m-d): " . date("Y-m-d") . "<br>";
echo "Format 2 (d/m/Y): " . date("d/m/Y") . "<br>";
echo "Day Name (l): " . date("l") . "<br>";
echo "Full Date (F jS Y): " . date("F jS Y") . "<br>";
echo "Time (h:i A): " . date("h:i A") . "<br>";
?>
