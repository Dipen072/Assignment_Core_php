<?php
// User-defined price (you can change it or take input from a form)
$price = 750;

// Calculate discount using ternary operator
$discount = ($price > 500) ? ($price * 0.10) : 0;

// Calculate final price after discount
$finalPrice = $price - $discount;

// Display results
echo "Original Price: ₹$price<br>";
echo "Discount: ₹$discount<br>";
echo "Final Price: ₹$finalPrice";
?>
