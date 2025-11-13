<?php
include 'header.php';  // Includes header (script continues even if file missing)
?>

<h2>Home Page</h2>
<p>This is the main homepage content.</p>

<?php
require 'footer.php';  // Requires footer (script stops if file missing)
?>
