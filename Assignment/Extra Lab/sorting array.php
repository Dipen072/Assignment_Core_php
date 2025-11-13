<?php
// Sample array
$numbers = array(5, 2, 9, 1, 7);

echo "<h3>Original Array:</h3>";
print_r($numbers);

// sort() - Ascending order
sort($numbers);
echo "<h3>sort() - Ascending Order:</h3>";
print_r($numbers);

// rsort() - Descending order
rsort($numbers);
echo "<h3>rsort() - Descending Order:</h3>";
print_r($numbers);

// Associative array example
$marks = array("Dipen" => 85, "Rahul" => 78, "Meena" => 92);

// asort() - Sort by values (ascending)
asort($marks);
echo "<h3>asort() - Sort by Value (Ascending):</h3>";
print_r($marks);

// ksort() - Sort by keys (ascending)
ksort($marks);
echo "<h3>ksort() - Sort by Key (Ascending):</h3>";
print_r($marks);
?>
