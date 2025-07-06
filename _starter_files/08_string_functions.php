<?php
// =====================================
//  Learn with Codency
// =====================================

/* ---------- String Functions in PHP ----------

PHP has a wide range of string functions that make text manipulation easy.

Official reference: https://www.php.net/manual/en/ref.strings.php
Below are more commonly used string functions:
*/

/* -------- ucwords() --------

Capitalizes the first letter of each word.
*/

$title = "learn php with codency";
echo ucwords($title); // Output: Learn Php With Codency

/* -------- ucfirst() --------

Capitalizes only the first character of a string.
*/

echo ucfirst("php is awesome"); // Output: Php is awesome

/* -------- nl2br() --------

Converts newlines (\n) to HTML <br> tags.
Useful when displaying text from textareas in HTML.
*/

$paragraph = "This is line one.\nThis is line two.";
echo nl2br($paragraph);
// Output: This is line one.<br>This is line two.

/* -------- strrev() --------

Reverses a string.
*/

echo strrev("codency"); // Output: ycnedoc

/* -------- str_repeat() --------

Repeats a string a specified number of times.
*/

echo str_repeat("=", 10); // Output: ==========

/* -------- htmlspecialch*
