<?php
function isPalindrome($string) {
    $cleaned = strtolower(str_replace(' ', '', $string)); // Remove spaces and make lowercase
    $reversed = strrev($cleaned);
    
    if ($cleaned == $reversed) {
        echo "'$string' is a Palindrome.";
    } else {
        echo "'$string' is NOT a Palindrome.";
    }
}

// Test
echo "<h3>Palindrome Checker</h3>";
isPalindrome("Madam");
echo "<br>";
isPalindrome("Hello");
?>
