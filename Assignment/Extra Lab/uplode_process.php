<?php
if (isset($_FILES['uploadedFile'])) {
    $file = $_FILES['uploadedFile'];
    $uploadDir = "uploads/";

    // Create directory if it doesn’t exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $targetFile = $uploadDir . basename($file["name"]);

    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        echo "<h3>File Uploaded Successfully!</h3>";
        echo "File Name: " . $file["name"] . "<br>";
        echo "File Type: " . $file["type"] . "<br>";
        echo "File Size: " . round($file["size"] / 1024, 2) . " KB<br><br>";

        echo "<a href='$targetFile' download>
                <button>Download File</button>
              </a>";
    } else {
        echo "<h3 style='color:red;'>File Upload Failed!</h3>";
    }
} else {
    echo "No file uploaded.";
}
?>