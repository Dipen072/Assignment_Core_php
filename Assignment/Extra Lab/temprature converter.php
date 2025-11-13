<?php
$temperature = 37;  // Input temperature
$scale = 'C';       // Use 'C' for Celsius, 'F' for Fahrenheit

if ($scale == 'C' || $scale == 'c') {
    $fahrenheit = ($temperature * 9/5) + 32;
    echo "$temperature °C = $fahrenheit °F";
} elseif ($scale == 'F' || $scale == 'f') {
    $celsius = ($temperature - 32) * 5/9;
    echo "$temperature °F = $celsius °C";
} else {
    echo "Invalid scale! Please use 'C' or 'F'.";
}
?>
