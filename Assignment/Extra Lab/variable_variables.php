<?php
echo "<h2>PHP Variable Variables Example</h2>";

// Step 1: Declare a normal variable
$name = "student";

// Step 2: Create another variable that holds the name of the first variable
$student = "Dipen Patel";

// Step 3: Use variable variables ($$)
echo "<h3>Using Variable Variables</h3>";
echo "The value of \$name is: " . $name . "<br>"; // Outputs: student
echo "The value of \$$name is: " . $$name . "<br>"; // Outputs: Dipen Patel

// Step 4: Another example with dynamic assignment
$city = "place";
$place = "Ahmedabad";

echo "<br><h3>Dynamic Example</h3>";
echo "The value of \$city is: " . $city . "<br>";  // Outputs: place
echo "The value of \$$city is: " . $$city . "<br>"; // Outputs: Ahmedabad
?>
