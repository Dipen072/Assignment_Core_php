output_ex<?php
// Title
echo "<h2>PHP Output Statements Example</h2>";

// 1️ Using echo
echo "<h3>1. Using echo</h3>";
$name = "Dipen";
$age = 21;
$price = 99.99;

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Price: ₹" . $price . "<br>";

// echo can take multiple parameters (unlike print)
echo "This ", "is ", "multiple ", "echo ", "parameters.<br>";

// 2️ Using print
echo "<h3>2. Using print</h3>";
print "Hello, this is printed using the print statement.<br>";

$city = "Ahmedabad";
print "City: " . $city . "<br>";

// print returns 1 (so it can be used in expressions)
$result = print("Testing print return value<br>");
echo "Print returned: " . $result . "<br>";

// 3️ Using var_dump
echo "<h3>3. Using var_dump()</h3>";
$number = 25;
$float = 12.5;
$bool = true;
$array = array("Apple", "Banana", "Cherry");

echo "Integer: ";
var_dump($number);
echo "<br>Float: ";
var_dump($float);
echo "<br>Boolean: ";
var_dump($bool);
echo "<br>Array: ";
var_dump($array);
echo "<br>";
?>
