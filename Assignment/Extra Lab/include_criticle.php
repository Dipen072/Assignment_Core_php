<?php
$filename = "config.php"; // Suppose this is a critical file

if (file_exists($filename)) {
    require($filename);
    echo "Critical file loaded successfully!";
} else {
    echo "<h3 style='color:red;'>Error: Critical file '$filename' not found. Please contact the administrator.</h3>";
}
?>
