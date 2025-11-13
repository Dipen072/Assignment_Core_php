<?php
function calculate($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero!";
        default:
            return "Invalid Operator!";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $op = $_POST['operator'];
    $result = calculate($n1, $n2, $op);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        Number 1: <input type="number" name="num1" required><br><br>
        Number 2: <input type="number" name="num2" required><br><br>
        Operator (+, -, *, /): <input type="text" name="operator" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($result)) {
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
