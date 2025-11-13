<?php
$numbers = [4, 0, 5, 0, 3, 0, 7, 2];
$nonZero = [];
$zero = [];

foreach ($numbers as $num) {
    if ($num == 0) {
        $zero[] = $num;
    } else {
        $nonZero[] = $num;
    }
}

$result = array_merge($nonZero, $zero);

echo "<h3>Array after moving zeros to bottom:</h3>";
echo implode(", ", $result);
?>
