<?php
$marks = 82; // You can change this or get it from a form

if ($marks >= 90 && $marks <= 100) {
    echo "Marks: $marks<br>Grade: A";
} elseif ($marks >= 75 && $marks < 90) {
    echo "Marks: $marks<br>Grade: B";
} elseif ($marks >= 60 && $marks < 75) {
    echo "Marks: $marks<br>Grade: C";
} elseif ($marks >= 40 && $marks < 60) {
    echo "Marks: $marks<br>Grade: D";
} elseif ($marks < 40 && $marks >= 0) {
    echo "Marks: $marks<br>Grade: Fail";
} else {
    echo "Invalid marks entered. Please enter a value between 0 and 100.";
}
?>
