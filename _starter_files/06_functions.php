<?php
// =====================================
//  Learn with Codency
// =====================================

/* ------------ Functions in PHP ------------

Functions are reusable blocks of code designed to perform specific tasks.
You can pass data to functions using parameters, and optionally return results.

Functions help make your code:
- Organized
- Easier to maintain
- DRY (Don’t Repeat Yourself)

Each function has its own local scope, meaning variables inside a function are not accessible outside unless returned.
*/

/* ---------- Defining a Function ----------

Syntax:
  function functionName($arg1, $arg2, ...) {
      // code to execute
  }
*/

// Example: A simple function with parameters
function greetUser($name) {
    echo "Hello, $name!<br>";
}

greetUser("Amina"); // Output: Hello, Amina!
greetUser("Zayd");  // Output: Hello, Zayd!

/* ---------- Function with Return Value ---------- */

function add($a, $b) {
    return $a + $b;
}

$result = add(3, 7);
echo "Sum: $result<br>"; // Output: Sum: 10

/* ---------- Default Parameters ----------

You can assign default values to parameters.
*/

function welcome($name = "Guest") {
    echo "Welcome, $name!<br>";
}

welcome();           // Output: Welcome, Guest!
welcome("Layla");    // Output: Welcome, Layla!

/* ---------- Scope Reminder ----------

Variables inside functions are local by default.
To access global variables, use the 'global' keyword or pass them in as parameters.
*/

$message = "Hello from outside";

function showMessage() {
    // echo $message; // Won't work: undefined in local scope
    global $message;
    echo $message . "<br>";
}

showMessage(); // Output: Hello from outside

?>
