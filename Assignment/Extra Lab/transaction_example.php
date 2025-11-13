<?php
$conn = new mysqli("localhost", "root", "", "college_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$conn->autocommit(FALSE); // Disable auto-commit
try {
    // Start Transaction
    $conn->begin_transaction();

    // Insert into students table
    $sql1 = "INSERT INTO students (name, course_id) VALUES ('Priya', 1)";
    if (!$conn->query($sql1)) {
        throw new Exception("Error in students insert: " . $conn->error);
    }

    // Insert into logs table
    $sql2 = "INSERT INTO logs (action, created_at) VALUES ('New student added', NOW())";
    if (!$conn->query($sql2)) {
        throw new Exception("Error in logs insert: " . $conn->error);
    }

    // If both succeed → commit
    $conn->commit();
    echo "✅ Transaction Successful! Both records inserted.";

} catch (Exception $e) {
    // If error → rollback
    $conn->rollback();
    echo "❌ Transaction Failed: " . $e->getMessage();
}

$conn->close();
?>
