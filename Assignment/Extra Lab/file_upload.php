<!DOCTYPE html>
<html>
<head>
    <title>File Upload Example</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        Select File: <input type="file" name="userfile"><br><br>
        <input type="submit" name="upload" value="Upload">
    </form>

    <?php
    if (isset($_POST['upload'])) {
        if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0) {
            echo "<h3>File Uploaded Successfully!</h3>";
            echo "File Name: " . $_FILES['userfile']['name'] . "<br>";
            echo "File Type: " . $_FILES['userfile']['type'] . "<br>";
            echo "File Size: " . $_FILES['userfile']['size'] . " bytes<br>";

            // Move uploaded file to 'uploads' folder
            $targetDir = "uploads/";
            if (!is_dir($targetDir)) {
                mkdir($targetDir); // create folder if not exists
            }

            $targetFile = $targetDir . basename($_FILES['userfile']['name']);
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $targetFile)) {
                echo "File saved to: " . $targetFile . "<br>";
            } else {
                echo "Error saving the file.";
            }
        } else {
            echo "<h3>Error: No file uploaded or upload failed!</h3>";
        }
    }
    ?>
</body>
</html>
