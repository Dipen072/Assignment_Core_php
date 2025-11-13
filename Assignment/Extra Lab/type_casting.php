<?php
echo "<h2>PHP Type Casting Example</h2>";

// Integer to Float
$intVar = 10;
echo "<h3>1. Integer to Float</h3>";
echo "Before Casting: ";
var_dump($intVar);

$floatVar = (float)$intVar;
echo "<br>After Casting: ";
var_dump($floatVar);
echo "<br><br>";

// String to Integer
$strVar = "123";
echo "<h3>2. String to Integer</h3>";
echo "Before Casting: ";
var_dump($strVar);

$intFromStr = (int)$strVar;
echo "<br>After Casting: ";
var_dump($intFromStr);
echo "<br><br>";

// Float to Integer
$floatNum = 99.99;
echo "<h3>3. Float to Integer</h3>";
echo "Before Casting: ";
var_dump($floatNum);

$intNum = (int)$floatNum;
echo "<br>After Casting: ";
var_dump($intNum);
echo "<br><br>";

// Boolean to String
$boolVar = true;
echo "<h3>4. Boolean to String</h3>";
echo "Before Casting: ";
var_dump($boolVar);

$strBool = (string)$boolVar;
echo "<br>After Casting: ";
var_dump($strBool);
echo "<br><br>";

// Array to Object
$arr = ["name" => "Dipen", "age" => 21];
echo "<h3>5. Array to Object</h3>";
echo "Before Casting: ";
var_dump($arr);

$obj = (object)$arr;
echo "<br>After Casting: ";
var_dump($obj);
echo "<br><br>";
?>
