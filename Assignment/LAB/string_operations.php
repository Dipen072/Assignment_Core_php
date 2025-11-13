s<?php
// String Declaration
$str1 = "Hello";
$str2 = "World!";

// 1️⃣ String Concatenation
echo "<h3>1. String Concatenation</h3>";
$result = $str1 . " " . $str2;  // Using dot (.) operator to concatenate
echo "Concatenated String: " . $result . "<br>";

// 2️⃣ Substring Extraction
echo "<h3>2. Substring Extraction</h3>";
$substring = substr($result, 0, 5); // Extracts "Hello" (from index 0, length 5)
echo "Substring (0,5): " . $substring . "<br>";

// 3️⃣ String Length
echo "<h3>3. String Length</h3>";
$length = strlen($result);
echo "Length of String: " . $length . "<br>";

// 4️⃣ Convert to Upper and Lower Case
echo "<h3>4. Uppercase and Lowercase Conversion</h3>";
echo "Uppercase: " . strtoupper($result) . "<br>";
echo "Lowercase: " . strtolower($result) . "<br>";

// 5️⃣ Replace Substring
echo "<h3>5. Replace Substring</h3>";
$replaced = str_replace("World", "PHP", $result);
echo "After Replacement: " . $replaced . "<br>";

// 6️⃣ Reverse String
echo "<h3>6. Reverse String</h3>";
$reverse = strrev($result);
echo "Reversed String: " . $reverse . "<br>";
?>
