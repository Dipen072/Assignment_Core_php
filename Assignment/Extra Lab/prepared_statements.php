<?php
$conn = new mysqli("localhost", "root", "", "college_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// INSERT
$stmt = $conn->prepare("INSERT INTO students (name, course_id) VALUES (?, ?)");
$stmt->bind_param("si", $name, $course_id);
$name = "Amit"; $course_id = 1;
$stmt->execute();
echo "✅ Inserted record successfully.<br>";

// SELECT
$stmt = $conn->prepare("SELECT id, name FROM students WHERE course_id = ?");
$stmt->bind_param("i", $course_id);
$course_id = 1;
$stmt->execute();
$result = $stmt->get_result();

echo "<h3>Students in course_id = 1</h3>";
while ($row = $result->fetch_assoc()) {
    echo $row['id'] . " - " . $row['name'] . "<br>";
}

// UPDATE
$stmt = $conn->prepare("UPDATE students SET name=? WHERE id=?");
$stmt->bind_param("si", $newName, $id);
$newName = "Amit Kumar";
$id = 1;
$stmt->execute();
echo "✅ Updated record successfully.<br>";

// DELETE
$stmt = $conn->prepare("DELETE FROM students WHERE id=?");
$stmt->bind_param("i", $id);
$id = 2;
$stmt->execute();
echo "✅ Deleted record successfully.<br>";

$stmt->close();
$conn->close();
?>
