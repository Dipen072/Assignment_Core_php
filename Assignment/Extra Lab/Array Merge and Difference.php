<?php
$array1 = array("a" => "Apple", "b" => "Banana", "c" => "Cherry");
$array2 = array("d" => "Dates", "b" => "Banana", "e" => "Elderberry");

// Merge arrays
$merged = array_merge($array1, $array2);
echo "<h3>Merged Array:</h3>";
print_r($merged);

// Find difference (elements in array1 not in array2)
$diff = array_diff($array1, $array2);
echo "<h3>Difference (array1 - array2):</h3>";
print_r($diff);
?>
