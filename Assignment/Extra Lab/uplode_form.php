<!DOCTYPE html>
<html>
<head>
    <title>File Upload Example</title>
</head>
<body>
<h3>Upload a File</h3>

<form action="upload_process.php" method="post" enctype="multipart/form-data">
    <input type="file" name="uploadedFile" required>
    <input type="submit" value="Upload File">
</form>

</body>
</html>
