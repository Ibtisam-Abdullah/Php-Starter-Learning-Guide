<?php
// =====================================
//  Learn with Codency
// =====================================

/* ---- Conditionals & Operators ---- */

/* ------------ Comparison Operators ------------

Used to compare values and return true or false.
*/

$a = 10;
$b = 5;

// Basic comparison examples
var_dump($a < $b);   // false
var_dump($a > $b);   // true
var_dump($a <= 10);  // true
var_dump($a >= 11);  // false
var_dump($a == "10");  // true (value equal, type doesn't matter)
var_dump($a === "10"); // false (not the same type)
var_dump($a != $b);   // true
var_dump($a !== 10);  // true (different type)

/* ------------ If & If-Else Statements ------------

Used to run code based on conditions.
*/

$score = 85;

if ($score >= 90) {
    echo "Excellent!";
} elseif ($score >= 75) {
    echo "Good job!";
} else {
    echo "Keep trying!";
}
// Output: Good job!

/* ------------ Ternary Operator ------------

A short version of an if-else statement.
Syntax:
  condition ? result_if_true : result_if_false;
*/

$age = 18;
echo ($age >= 18) ? "Adult" : "Minor"; // Output: Adult

/* ------------ Switch Statements ------------

Useful when checking a variable against multiple values.
*/

$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Friday":
        echo "Weekend is near!";
        break;
    default:
        echo "Just another day.";
        break;
}
// Output: Start of the week!

?>
