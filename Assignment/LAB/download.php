<!DOCTYPE html>
<html>
<head>
    <title>File Download Example</title>
</head>
<body>
    <h2>Download File</h2>
    <form method="post">
        <input type="submit" name="java_tutorial.pdf" value="java_tutorial.pdf">
    </form>

    <?php
    if (isset($_POST['download'])) {
        $file = "sample.txt";  // make sure this file exists in the same folder
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        } else {
            echo "File not found!";
        }
    }
    ?>
</body>
</html>
