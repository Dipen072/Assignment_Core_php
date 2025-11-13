<?php
// Define a multi-dimensional array for products
$products = array(
    array("name" => "Laptop", "price" => 55000, "stock" => 15),
    array("name" => "Mouse", "price" => 800, "stock" => 120),
    array("name" => "Keyboard", "price" => 1500, "stock" => 60),
    array("name" => "Monitor", "price" => 12000, "stock" => 25)
);

// Display in a table
echo "<h3>Product Information</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Name</th><th>Price (₹)</th><th>Stock</th></tr>";

foreach ($products as $item) {
    echo "<tr>";
    echo "<td>" . $item['name'] . "</td>";
    echo "<td>" . $item['price'] . "</td>";
    echo "<td>" . $item['stock'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
