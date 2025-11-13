<!DOCTYPE html>
<html>
<head>
    <title>PHP Embedded in HTML - User Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 50px auto;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Dynamic User Table using PHP</h2>

<?php
// Array of users
$users = [
    ["name" => "Alice", "email" => "alice@example.com", "age" => 22],
    ["name" => "Bob", "email" => "bob@example.com", "age" => 25],
    ["name" => "Charlie", "email" => "charlie@example.com", "age" => 30],
    ["name" => "David", "email" => "david@example.com", "age" => 28]
];
?>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
    </tr>

    <?php
    // Loop through the array and display data in table rows
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user['name'] . "</td>";
        echo "<td>" . $user['email'] . "</td>";
        echo "<td>" . $user['age'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
