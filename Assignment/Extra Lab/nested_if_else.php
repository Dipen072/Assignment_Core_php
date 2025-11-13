<?php
$number = -5; // You can change this value or take input using form

if ($number > 0) {
    echo "$number is Positive.<br>";

    if ($number % 2 == 0) {
        echo "It is Even.";
    } else {
        echo "It is Odd.";
    }

} elseif ($number < 0) {
    echo "$number is Negative.<br>";

    if ($number % 2 == 0) {
        echo "It is Even.";
    } else {
        echo "It is Odd.";
    }

} else {
    echo "The number is Zero (Neither positive nor negative).";
}
?>
