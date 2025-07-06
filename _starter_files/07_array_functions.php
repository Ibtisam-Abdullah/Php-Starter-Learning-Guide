<?php
// =====================================
//  Learn with Codency
// =====================================

/* --------- Array Functions in PHP ---------

PHP provides many built-in functions to work with arrays.

Below are some of the most commonly used ones.
Reference: https://www.php.net/manual/en/ref.array.php
*/

/* ----------- count() -----------

Returns the number of elements in an array.
*/

$colors = ["red", "green", "blue"];
echo count($colors); // Output: 3

/* ----------- array_push() -----------

Adds one or more elements to the end of an array.
*/

array_push($colors, "yellow", "purple");
print_r($colors);
// Output: Array ( [0] => red [1] => green [2] => blue [3] => yellow [4] => purple )

/* ----------- array_pop() -----------

Removes the last element from an array.
*/

$last = array_pop($colors);
echo $last; // Output: purple

/* ----------- array_shift() -----------

Removes the first element of an array.
*/

$first = array_shift($colors);
echo $first; // Output: red

/* ----------- array_unshift() -----------

Adds one or more elements to the beginning of an array.
*/

array_unshift($colors, "black");
print_r($colors);
// Output: Array ( [0] => black [1] => green [2] => blue [3] => yellow )

/* ----------- in_array() -----------

Checks if a value exists in an array.
*/

if (in_array("blue", $colors)) {
    echo "Blue is in the list.<br>";
}

/* ----------- array_keys() -----------

Returns all the keys from an array.
*/

$user = [
    "name" => "Sara",
    "age" => 28,
    "email" => "sara@example.com"
];

$keys = array_keys($user);
print_r($keys);
// Output: Array ( [0] => name [1] => age [2] => email )

/* ----------- array_merge() -----------

Combines two or more arrays into one.
*/

$a = [1, 2];
$b = [3, 4];
$merged = array_merge($a, $b);
print_r($merged);
// Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

?>
