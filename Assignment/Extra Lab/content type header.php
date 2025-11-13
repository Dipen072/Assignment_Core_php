<?php
// Example 1: Return as Plain Text
/*
header("Content-Type: text/plain");
echo "This is a plain text response from PHP.";
*/

// Example 2: Return as JSON
header("Content-Type: application/json");

$data = array(
    "name" => "Dipen",
    "course" => "Web Development",
    "status" => "Active"
);

echo json_encode($data);
?>
