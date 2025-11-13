<?php
function factorial($n) {
    if ($n <= 1)
        return 1;
    else
        return $n * factorial($n - 1);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['number'];
    $result = factorial($num);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Factorial Using Recursion</title>
</head>
<body>
    <h2>Find Factorial of a Number</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" required><br><br>
        <input type="submit" value="Find Factorial">
    </form>

    <?php
    if (isset($result)) {
        echo "<h3>Factorial of $num is: $result</h3>";
    }
    ?>
</body>
</html>
