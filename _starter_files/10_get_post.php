<?php
// =====================================
//  Learn with Codency
// =====================================

/* --- $_GET and $_POST Superglobals ---

These two superglobals are used to collect data from users via URLs and forms.

- $_GET: Retrieves data sent through the URL (query string).
- $_POST: Retrieves data submitted through an HTML form using method="POST".
*/

/* ----------- $_GET Example -----------

Used when submitting data via URL like:
    form.php?user=Layla&age=25
*/

$user = $_GET['user'] ?? 'Guest';
$age = $_GET['age'] ?? 'Unknown';

echo "User: $user<br>";
echo "Age: $age<br>";

/* ----------- $_POST Example -----------

Used with forms where the method is set to POST.

Example form:
<form method="POST" action="submit.php">
  <input type="text" name="email">
  <input type="submit">
</form>
*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    
    if (!empty($email)) {
        echo "Submitted Email: $email";
    } else {
        echo "Please enter an email.";
    }
}

/* --- When to Use What? ---

Use $_GET:
- When sharing or bookmarking data via the URL
- For simple search or filter forms

Use $_POST:
- When sending sensitive or large amounts of data
- When the action should not be exposed in the URL (e.g., passwords)
*/

?>
