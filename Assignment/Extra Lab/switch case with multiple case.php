<?php
$grade = 'B'; // You can change this value or take input using form

switch ($grade) {
    case 'A':
    case 'B':
        echo "Excellent! Keep it up.";
        break;

    case 'C':
        echo "Good work! You can improve.";
        break;

    case 'D':
        echo "You passed, but need more effort.";
        break;

    case 'F':
        echo "Fail. Better luck next time.";
        break;

    default:
        echo "Invalid grade entered.";
        break;
}
?>
