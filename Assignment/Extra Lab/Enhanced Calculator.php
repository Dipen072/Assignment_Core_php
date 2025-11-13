<?php
$num1 = 9;
$num2 = 3;
$operator = '^';  // Options: +, -, *, /, %, ^, sqrt

switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        echo "Result: $num1 + $num2 = $result";
        break;

    case '-':
        $result = $num1 - $num2;
        echo "Result: $num1 - $num2 = $result";
        break;

    case '*':
        $result = $num1 * $num2;
        echo "Result: $num1 × $num2 = $result";
        break;

    case '/':
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "Result: $num1 ÷ $num2 = $result";
        } else {
            echo "Error: Division by zero!";
        }
        break;

    case '%':
        $result = $num1 % $num2;
        echo "Result: $num1 % $num2 = $result";
        break;

    case '^':
        $result = pow($num1, $num2);
        echo "Result: $num1 ^ $num2 = $result";
        break;

    case 'sqrt':
        $result = sqrt($num1);
        echo "Square Root of $num1 = $result";
        break;

    default:
        echo "Invalid operator!";
}
?>
