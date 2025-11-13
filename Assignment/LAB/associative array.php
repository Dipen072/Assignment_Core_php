<?php
$user = [
    "name" => "Dipen Patel",
    "email" => "dipen@example.com",
    "age" => 22
];

echo "<h3>User Details:</h3>";
foreach ($user as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}
?>
