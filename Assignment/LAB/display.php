<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
</head>
<body>
    <h2>Entered User Details</h2>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];

            echo "Name: " . htmlspecialchars($name) . "<br>";
            echo "Email: " . htmlspecialchars($email);
        }
    ?>
</body>
</html>
