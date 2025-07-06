<?php
// =====================================
//  Learn with Codency
// =====================================

/* ----- Variables & Data Types in PHP ----- */

/* -------- PHP Data Types --------
PHP supports several basic data types used to store different kinds of values:
*/

// String: A sequence of characters enclosed in quotes
$name = "Codency";

// Integer: A whole number, without a decimal point
$age = 25;

// Float (or Double): A number with a decimal point
$price = 19.99;

// Boolean: Represents true or false
$isAvailable = true;

// Array: A collection of multiple values in a single variable
$colors = ["red", "green", "blue"];

// Object: An instance of a class (used in OOP)
class Car {
    public $brand;
}
$myCar = new Car();
$myCar->brand = "Toyota";

// NULL: A variable with no value assigned
$nothing = null;

// Resource: A special type that holds external resources (e.g., database connections)
// Usually created by specific functions and not manually
$file = fopen("example.txt", "r");



/* -------- PHP Variable Rules --------
When working with variables in PHP, keep these rules in mind:
*/

// Variables must start with a $ sign
$username = "admin";

// The first character must be a letter or an underscore (_)
$_count = 10;

// Variable names cannot start with a number
// $2total = 50; // Invalid

// Valid characters: letters, numbers, and underscores only
$user_id_2025 = 123;

// PHP variable names are case-sensitive
$fruit = "apple";
$Fruit = "orange"; // This is a different variable

?>
