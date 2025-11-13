<?php
// Database Connection
$conn = new mysqli("localhost", "root", "", "college_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// INNER JOIN: students + courses
echo "<h3>INNER JOIN (students with enrolled courses)</h3>";
$sql = "SELECT students.id, students.name, courses.course_name 
        FROM students 
        INNER JOIN courses ON students.course_id = courses.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Course</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['course_name']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

echo "<hr>";

// LEFT JOIN: show all students, even if no course assigned
echo "<h3>LEFT JOIN (all students, even without course)</h3>";
$sql = "SELECT students.name, courses.course_name 
        FROM students 
        LEFT JOIN courses ON students.course_id = courses.id";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Student: {$row['name']} — Course: " . ($row['course_name'] ?? 'Not Enrolled') . "<br>";
}

echo "<hr>";

// RIGHT JOIN: show all courses, even if no student enrolled
echo "<h3>RIGHT JOIN (all courses, even without students)</h3>";
$sql = "SELECT students.name, courses.course_name 
        FROM students 
        RIGHT JOIN courses ON students.course_id = courses.id";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Course: {$row['course_name']} — Student: " . ($row['name'] ?? 'No Student') . "<br>";
}

$conn->close();
?>
