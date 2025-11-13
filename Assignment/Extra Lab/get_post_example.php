<!DOCTYPE html>
<html>
<head>
    <title>PHP GET and POST Example</title>
</head>
<body>
    <h2>Form using GET Method</h2>
    <form method="GET" action="">
        Name: <input type="text" name="name"><br>
        Age: <input type="number" name="age"><br>
        <input type="submit" value="Submit (GET)">
    </form>

    <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
        echo "<h3>Data received via GET:</h3>";
        echo "Name: " . $_GET['name'] . "<br>";
        echo "Age: " . $_GET['age'] . "<br>";
        echo "<strong>URL Example:</strong> Data appears in URL after '?'<br>";
    }
    ?>

    <hr>

    <h2>Form using POST Method</h2>
    <form method="POST" action="">
        Name: <input type="text" name="pname"><br>
        Age: <input type="number" name="page"><br>
        <input type="submit" value="Submit (POST)">
    </form>

    <?php
    if (isset($_POST['pname']) && isset($_POST['page'])) {
        echo "<h3>Data received via POST:</h3>";
        echo "Name: " . $_POST['pname'] . "<br>";
        echo "Age: " . $_POST['page'] . "<br>";
        echo "<strong>POST data does not appear in the URL.</strong><br>";
    }
    ?>
</body>
</html>
