<?php
// =====================================
//  Learn with Codency
// =====================================

/* ----------- Arrays in PHP -----------

Arrays are used to store multiple values in a single variable.
Each item in an array is called an "element", and it can be accessed using its index or key.

There are three main types of arrays in PHP:
1. Indexed Arrays – use numeric indexes
2. Associative Arrays – use named keys
3. Multidimensional Arrays – arrays within arrays
*/

/* --- 1. Indexed Arrays --- */

$colors = ["red", "green", "blue"];
echo $colors[0]; // Output: red

/* --- 2. Associative Arrays --- */

$user = [
    "name" => "Sarah",
    "age" => 30,
    "email" => "sarah@gmail.com"
];
echo $user["email"]; // Output: sarah@gmail.com

/* --- 3. Multidimensional Arrays --- */

$products = [
    ["name" => "Laptop", "price" => 800],
    ["name" => "Mouse", "price" => 25],
    ["name" => "Keyboard", "price" => 45]
];
echo $products[1]["name"]; // Output: Mouse

?>
