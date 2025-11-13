<?php
// ✅ Non-Recursive Factorial Function
function factorial_non_recursive($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// ✅ Recursive Factorial Function
function factorial_recursive($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial_recursive($n - 1);
    }
}

// ✅ Compare Performance
$number = 10; // You can change this or get it from input

$start1 = microtime(true);
$fact1 = factorial_non_recursive($number);
$end1 = microtime(true);

$start2 = microtime(true);
$fact2 = factorial_recursive($number);
$end2 = microtime(true);

echo "<h3>Factorial Calculation</h3>";
echo "Number: $number<br>";
echo "Non-Recursive Result: $fact1 (Time: " . round(($end1 - $start1), 6) . " sec)<br>";
echo "Recursive Result: $fact2 (Time: " . round(($end2 - $start2), 6) . " sec)<br>";

if ($end1 - $start1 < $end2 - $start2) {
    echo "<b>➡️ Non-Recursive is faster for larger numbers.</b>";
} else {
    echo "<b>➡️ Recursive is faster (rare, only for small numbers).</b>";
}
?>
