<?php
// =====================================
//  Learn with Codency
// =====================================

/* -------- Loops & Iteration in PHP --------

Loops allow you to repeat blocks of code based on conditions.
PHP supports several types of loops:
1. for
2. while
3. do...while
4. foreach (used with arrays)
*/

/* ------------ For Loop ------------

Used when the number of iterations is known.
Syntax:
  for (initialization; condition; increment) {
    // code to run
  }
*/

for ($i = 1; $i <= 5; $i++) {
    echo "Step $i<br>";
}

/* ------------ While Loop ------------

Repeats as long as the condition is true.
Useful when you don't know how many times you'll loop.
*/

$count = 1;
while ($count <= 3) {
    echo "Count is $count<br>";
    $count++;
}

/* ---------- Do...While Loop ----------

Runs the block at least once, even if the condition is false.
*/

$num = 1;
do {
    echo "Number is $num<br>";
    $num++;
} while ($num <= 2);

/* ---------- Foreach Loop ----------

Specially used to loop through arrays.
Syntax:
  foreach ($array as $value) {
    // code to run
  }
*/

$fruits = ["Apple", "Banana", "Mango"];

foreach ($fruits as $fruit) {
    echo "I like $fruit<br>";
}

?>
