<?php
echo "<h2>PHP Variable Scope Example</h2>";

// Global variable
$number = 10;

function localScopeExample() {
    // Local variable
    $number = 5;
    echo "<h3>Inside Function (Local Scope)</h3>";
    echo "Value of \$number inside function: " . $number . "<br>";
}

function globalScopeExample() {
    // Use global keyword to access global variable
    global $number;
    echo "<h3>Accessing Global Variable Inside Function</h3>";
    echo "Value of global \$number inside function: " . $number . "<br>";

    // Modify global variable
    $number = $number + 20;
    echo "Modified global \$number inside function: " . $number . "<br>";
}

// Call the functions
localScopeExample();
globalScopeExample();

echo "<h3>Outside Function (Global Scope)</h3>";
echo "Value of \$number outside function after modification: " . $number . "<br>";
?>
