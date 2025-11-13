<?php
include 'db.php';

function clean($s) {
    return trim($s);
}

$name = isset($_POST['name']) ? clean($_POST['name']) : '';
$age_group = isset($_POST['age_group']) ? clean($_POST['age_group']) : '';
$rating = isset($_POST['rating']) ? (int) $_POST['rating'] : 0;
$feedback = isset($_POST['feedback']) ? clean($_POST['feedback']) : '';

// Basic validation
$errors = [];
if ($name === '') $errors[] = "Name required.";
$valid_age_groups = ['Under 18','18-25','26-40','40+'];
if (!in_array($age_group, $valid_age_groups)) $errors[] = "Valid age group required.";
if ($rating < 1 || $rating > 5) $errors[] = "Rating must be 1 to 5.";

if (!empty($errors)) {
    // Show errors (simple)
    foreach ($errors as $e) echo "<p style='color:red;'>$e</p>";
    echo '<p><a href="index.php">Back to form</a></p>';
    exit;
}

// Insert safely with prepared statement
$stmt = $mysqli->prepare("INSERT INTO responses (name, age_group, rating, feedback) VALUES (?, ?, ?, ?)");
$stmt->bind_param('ssis', $name, $age_group, $rating, $feedback);
if ($stmt->execute()) {
    echo "<p>Thank you — response recorded.</p>";
    echo '<p><a href="index.php">Submit another</a> | <a href="report.php">View report</a></p>';
} else {
    echo "<p style='color:red;'>DB error: " . htmlspecialchars($stmt->error) . "</p>";
}
$stmt->close();
$mysqli->close();
