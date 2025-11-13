<?php
echo "<h3>Multiplication Table (1 to 10)</h3>";

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i × $j = " . ($i * $j) . "<br>";
    }
    echo "<hr>"; // separates tables for clarity
}
?>
