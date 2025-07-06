<?php
// =====================================
//  Learn with Codency
// =====================================

/* -------- Output & Comments ------- */

/*
  PHP file running on a server can output both HTML and PHP.
  It can use several functions to send output to the browser.
*/

/* Common Output Functions */

// 1. echo - Basic output for one or more strings
echo "Hello, world!"; // Prints text 

// 2. print - Similar to echo but returns a value
print "Welcome to PHP!"; // Returns 1 

// 3. print_r - Prints arrays and objects in a readable way
$colors = ["Red", "Green", "Blue"];
print_r($colors); // Outputs array 

// 4. var_dump - Shows detailed info (type + value)
$age = 25;
var_dump($age); // Shows type + value 


/* -------- Comments in PHP ------- */

/*
  PHP supports both single-line and multi-line comments.
*/

// This is a single-line comment

/*
  This is a multi-line comment
*/

?>
