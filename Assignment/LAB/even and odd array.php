<?php
$numbers = [2, 5, 8, 11, 14, 17, 20];
$even = 0;
$odd = 0;

foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        $even++;
    } else {
        $odd++;
    }
}

echo "<h3>Number Analysis:</h3>";
echo "Even numbers: " . $even . "<br>";
echo "Odd numbers: " . $odd;
?>
