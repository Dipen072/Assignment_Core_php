<?php
function reverseString($str) {
    $rev = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $rev .= $str[$i];
    }
    return $rev;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
    $reversed = reverseString($text);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Reverse</title>
</head>
<body>
    <h2>Reverse a String</h2>
    <form method="post">
        Enter a string: <input type="text" name="text" required><br><br>
        <input type="submit" value="Reverse">
    </form>

    <?php
    if (isset($reversed)) {
        echo "<h3>Reversed String: $reversed</h3>";
    }
    ?>
</body>
</html>
